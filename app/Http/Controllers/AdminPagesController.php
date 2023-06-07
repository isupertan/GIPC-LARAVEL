<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Blogs;
use App\Models\Speakers;
use App\Models\Sponsors;
use App\Models\PastEvents;
use App\Models\BlogCategory;
use App\Models\NestedPosts;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Procount       = Products::count();
        $catcount       = Categories::count();
        $postcount      = NestedPosts::count();
        $blogcount      = Blogs::count();
        $blogcategory   = BlogCategory::count();
        $speakercount   = Speakers::count();
        $sponsorcount   = Sponsors::count();
        $pasteventcount = PastEvents::count();
        $products       = Products::with('category')->get();
        return view('backend.dashboard.list', compact('Procount','catcount','postcount','blogcount','products','blogcategory','speakercount', 'sponsorcount','pasteventcount'));
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

    //File manager
    public function filemanager()
    {
        return view('backend.filemanager.list');
    }
}
