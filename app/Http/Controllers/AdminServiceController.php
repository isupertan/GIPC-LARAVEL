<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\ServiceModel;


class AdminServiceController extends Controller
{
    // /**
    //  * Instantiate a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = ServiceModel::all();
        return view('backend.service.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $services = ServiceModel::all();
        return view('backend.service.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [

            'title'          => 'required|string',
            'service_detail' => 'required|string',
        ]);


        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('service', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $Services = new ServiceModel;
            $Services->title = $request->title;
            $Services->service_img = $request->file->hashName();
            $Services->service_details = $request->service_detail;

            $Services->save(); // Finally, save the record.
        }
        return redirect()->route('admin.service')->with('success','Service has been uplaoded');
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
        $service = ServiceModel::find($id);
        return view('backend.service.edit', compact('service'));
        
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
        
        $this->validate($request, [
            'title'          => 'required|string',
            'service_detail' => 'required|string',
        ]);

        $services = ServiceModel::find($id);
        $services->title = $request->title;
        $services->service_details = $request->service_detail;


        // if ($request->hasFile('file')) {old_image
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('service', 'public');
            $services->service_img = $big_file->hashName();
        } 


            $services->save(); 
        // }
        return redirect()->route('admin.service')->with('success','Service has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = ServiceModel::find($id);
        @unlink(public_path('storage/service/'.$services->service_img));
        $services->delete();

        return redirect()->route('admin.service')->with('success','Service has been deleted');
    }
}
