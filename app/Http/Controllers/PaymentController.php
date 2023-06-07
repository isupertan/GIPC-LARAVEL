<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use App\Models\Payments;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $razorpayId = "rzp_test_apcyPmwyLRTL02";
    private $razorpayKey = "8DmQt3zpDmPu1iLicDnb5I6R";

    public function index()
    {
        return view('frontend.payment-initiate');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //additional
    public function Initiate(Request $request)
    {
        // Generate random receipt id
        $receiptId = Str::random(20);
        
        // Create an object of razorpay
        $api = new Api($this->razorpayId, $this->razorpayKey);

        // In razorpay you have to convert rupees into paise we multiply by 100
        // Currency will be INR
        // Creating order
        $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR'
            )
        );

        // Return response on payment page
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->all()['amount'] * 100,
            'name' => $request->all()['name'],
            'currency' => 'INR',
            'email' => $request->all()['email'],
            'contactNumber' => $request->all()['contactNumber'],
            'address' => $request->all()['address'],
            'description' => 'Payment to Prayas NGO',
            'pan' => $request->all()['pan'],
            'aadhar' => $request->all()['aadhar'],
        ];

        // Let's checkout payment page is it working
        return view('frontend.payment-page',compact('response'));
    }
    public function Complete(Request $request)
    {
        // Now verify the signature is correct . We create the private function for verify the signature
        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid']
        );
        // get all details
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $response = $request->all();
            $payment_details = $api->payment->fetch($request->all()['rzp_paymentid']);
            $amountPaid = $payment_details['amount'] / 100;
            // Payment detail save in database
            $payment = new Payments;

            $payment->name              =       $payment_details['notes']['name'];
            $payment->email             =       $payment_details['email'];
            $payment->phone             =       $payment_details['contact'];
            $payment->order_id          =       $payment_details['order_id'];
            $payment->rzp_payment_id    =       $payment_details['id'];
            $payment->amount            =       $amountPaid;
            $payment->description       =       $payment_details['description'];
            $payment->address           =       $payment_details['notes']['address'];
            $payment->pan_card          =       $payment_details['notes']['pan'];
            $payment->aadhar_card       =       $payment_details['notes']['aadhar'];

        // If Signature status is true We will save the payment response in our database
        // In this tutorial we send the response to Success page if payment successfully made
        if($signatureStatus == true)
        {
            //check if data is already in db
            $payemnt_repeat_check = Payments::where('rzp_payment_id', '=', $payment_details['id'])->first();
            if ($payemnt_repeat_check === null) {
                $payment->payment_status    =       1;
                $payment->save();
            }
            // You can create this page

            return view('frontend.payment-success', compact('payment_details'));
        }
        else{

            //check if data is already in db
            $payemnt_repeat_check = Payments::where('rzp_payment_id', '=', $payment_details['id'])->first();
            if ($payemnt_repeat_check === null) {
                $payment->payment_status    =       0;
                $payment->save();
            } 

            return view('frontend.payment-failed', compact('payment_details'));
        }
    }

    // In this function we return boolean if signature is correct
    private function SignatureVerify($_signature,$_paymentId,$_orderId)
    {
        try
        {
            // Create an object of razorpay class
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);
            return true;
        }
        catch(\Exception $e)
        {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }

    public function TxnDetails()
    {
        $txns = Payments::all();
        return view('backend.donation.list', compact('txns'));
    }
}
