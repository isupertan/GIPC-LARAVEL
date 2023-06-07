<?php

namespace App\Http\Controllers;

use App\Models\SponsorsCategory;
use Illuminate\Http\Request;

class SponsorsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = SponsorsCategory::all();
        return view('backend.sponsor.listcats', compact('categories'));
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
        $this->validate($request, [

            'title'             => 'required|string',
        ]);



            $categories                     =     new SponsorsCategory;
            $categories->title              =     $request->title;


            $categories->save(); // Finally, save the record.
        

            return redirect()->back()->with('success','Sponsor categories Has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SponsorsCategory  $sponsorsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SponsorsCategory $sponsorsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SponsorsCategory  $sponsorsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SponsorsCategory $sponsorsCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SponsorsCategory  $sponsorsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $categories                     =     SponsorsCategory::find($id);
            $categories->title              =     $request->title;
            

        $categories->save(); // Finally, save the record.
        return redirect()->back()->with('success','Sponsor Category Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SponsorsCategory  $sponsorsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = SponsorsCategory::find($id);
        $categories->delete();
        return redirect()->back()->with('success','Sponsor Category has been deleted');
    }
}
