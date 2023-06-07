<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\BlogCategory;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs =   Blogs::with('blogcategory')->get();
        // print_r($blogs);
        return view('backend.blogs.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = BlogCategory::all();
        return view('backend.blogs.add',compact('categorys'));
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
            'img_alt'           => 'required|string',
            'meta_title'        => 'required|string',
            'img_alt'           => 'required|string',
        ]);

        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('blogs', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $blogs                           =     new Blogs;
            $blogs->title                    =     $request->title;
            $blogs->slug                     =     str_slug($request->title);
            $blogs->image_name               =     $request->file->hashName();
            $blogs->image_alt                =     $request->img_alt;
            $blogs->description              =     $request->description;
            $blogs->category                 =     $request->category;
            $blogs->short_description        =     $request->short_description;
            $blogs->affiliate_link           =     $request->affiliate_link;
            $blogs->meta_title               =     $request->meta_title;
            $blogs->meta_description         =     $request->meta_description;

            $blogs->save(); // Finally, save the record.
        }

            // $blogs                           =     new Blogs;
            // $blogs->title                    =     $request->title;
            // $blogs->slug                     =     str_slug($request->title);
            // $blogs->image_name               =     $request->filename;
            // $blogs->image_alt                =     $request->img_alt;
            // $blogs->description              =     $request->description;
            // $blogs->short_description        =     $request->short_description;
            // $blogs->affiliate_link           =     $request->affiliate_link;
            // $blogs->meta_title               =     $request->meta_title;
            // $blogs->meta_description         =     $request->meta_description;

            // $blogs->save(); // Finally, save the record.

        return redirect()->route('admin.blog')->with('success','Blog Has Been Added');
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

        $blog =   Blogs::with('blogcategory')->where('id', $id)->first();
        $categories = BlogCategory::all();

        return view('backend.blogs.edit',compact('blog','categories'));
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

            'title'             => 'required|string',
            'img_alt'           => 'required|string',
            'meta_title'        => 'required|string',
        ]);

            $blog                            =     Blogs::find($id);
            $blog->title                     =     $request->title;
            $blog->image_alt                 =     $request->img_alt;
            $blog->description               =     $request->description;
            $blog->meta_title                =     $request->meta_title;
            $blog->category                  =      $request->category;
            $blog->short_description         =      $request->short_description;
            $blog->affiliate_link            =      $request->affiliate_link;
            $blog->meta_description          =      $request->meta_description;
            // if(!empty( $request->filename)){
            //    $blog->image_name               =     $request->filename;
            // }
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('blogs', 'public');
            $blog->image_name = $big_file->hashName();
        } 

        $blog->save(); // Finally, save the record.
        return redirect()->route('admin.blog')->with('success','Blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blogs::find($id);
        @unlink(public_path('storage/blogs/'.$blogs->image_name));
        $blogs->delete();

        return redirect()->route('admin.blog')->with('success','Blog has been deleted');
    }
}
