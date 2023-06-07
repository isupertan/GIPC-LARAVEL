<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class UserAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UserAuth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'      => 'required',
        'email'     => 'required|email|unique:admins',
        'phone'     => 'required',
        'password'  => 'required|min:5|max:16',
       ]);

       $user = new Admin;
       $user->name       = $request->name;
       $user->email      = $request->email;
       $user->phone      = $request->phone;
       $user->password   = Hash::make($request->password);
       $user->save();

       return redirect()->route('admin.userlist')->with('success','Admin has been added');
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
        $authusers = Admin::find($id);
        $authusers->delete();
        return redirect()->route('admin.userlist')->with('success','Admin has been Revoked');
    }

    //logout
    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('admin/login');
        }
    }

    //Get User List
    public function userlist()
    {
        $authusers = Admin::all();
        return view('backend.users.list', compact('authusers'));
    }
    //check login correcction
    public function check(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:5|max:16',
           ]);
        $user = Admin::where('email', '=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password)){
            //if everything matches
            $request->session()->put('LoggedUser', $user->id);
            $request->session()->put('LoggesUsername', $user->name);
            // $user = Auth::userNew();
            return redirect('admin/dashboard');
            }else{
                return back()->with('error', 'Invalid Email or Password');
            }
        }else{
            return back()->with('error', 'User not found');
        }
    }
}
