<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NestedPosts;

class NestedPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = NestedPosts::where('parent_id', 0)->get();
        // $posts = NestedPosts::all();

        return view('backend.nestedpost.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nestedpost.add');
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
            'description'       => 'required',
            'meta_title'        => 'required|string',
            'meta_description'  => 'required|string',
            'img_alt'           => 'required|string',
        ]);

        if ($request->parent_id == "") {
            $parent_id = 0;
        } else {
            $parent_id = $request->parent_id;
        }


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('nestedpost', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $nestedpost = new NestedPosts;
            $nestedpost->parent_id        =     $parent_id;
            $nestedpost->title            =     $request->title;
            $nestedpost->slug             =     str_slug($request->title);
            $nestedpost->image_name       =     $request->file->hashName();
            $nestedpost->image_alt        =     $request->img_alt;
            $nestedpost->description      =     $request->description;
            $nestedpost->meta_title       =     $request->meta_title;
            $nestedpost->meta_description =     $request->meta_description;

            $nestedpost->save(); // Finally, save the record.
        }
        
        return redirect()->route('admin.npost')->with('success','Post has been added');

        // "parent_id",  "title", "slug", "image_name", "image_alt", "description", "meta_title", "meta_description"
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
        $post = NestedPosts::find($id);
        return view('backend.nestedpost.edit', compact('post'));
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
            'title'                      =>    'required|string',
            'img_alt'                    =>    'required|string',
            'description'                =>    'required',
            'meta_title'                 =>    'required|string',
            'meta_description'           =>    'required|string',
            'img_alt'                    =>    'required|string',
        ]);

        $nestedpost                      =     NestedPosts::find($id);
        $nestedpost->title               =     $request->title;
        $nestedpost->image_alt           =     $request->img_alt;
        $nestedpost->description         =     $request->description;
        $nestedpost->meta_title          =     $request->meta_title;
        $nestedpost->meta_description    =     $request->meta_description;
        

        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('nestedpost', 'public');
            $nestedpost->image_name = $big_file->hashName();
        } 

        $nestedpost->save(); // Finally, update the record.
        return redirect()->route('admin.npost')->with('success','Post Has Been Updated');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = NestedPosts::find($id);
        @unlink(public_path('storage/nestedpost/'.$posts->image_name));
        $posts->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Service has been deleted');
    }

    public function upload(Request $request){


            if($request->hasFile('upload')) {
    
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('upload')->move(public_path('images'), $fileName);
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('images/'.$fileName); 
                $msg = 'Image uploaded successfully'; 
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                @header('Content-type: text/html; charset=utf-8'); 
                return response()->json([
                        'url' => $url
                ]);
                // return $response;

            }
    
        }
    /****************************/
    // SUB POST
    /*******************************/ 
    public function subindex($id){

        $post_details = NestedPosts::where('id', $id)->get();
        $posts = NestedPosts::where('parent_id', $id)->get();

        if (count($post_details) > 0){
            return view('backend.nestedpost.nestedpostsub.list', compact('posts','post_details'));
        } else {
            return redirect()->route('admin.npost');
        }

        

    }
    public function subcreate($id){
        $post_details = NestedPosts::where('id', $id)->get();

        if (count($post_details) > 0){
            return view('backend.nestedpost.nestedpostsub.add', compact('post_details'));
        } else {
            return redirect()->route('admin.npost');
        }

    }
    public function substore(Request $request){

        $this->validate($request, [

            'title'             => 'required|string',
            'img_alt'           => 'required|string',
            'description'       => 'required',
            'meta_title'        => 'required|string',
            'meta_description'  => 'required|string',
            'img_alt'           => 'required|string',
        ]);

        if ($request->parent_id == "") {
            $parent_id = 0;
        } else {
            $parent_id = $request->parent_id;
        }

        // if ($parent_id == $id) {
        //     $parent_id = $id;
        // } else {
        //     $parent_id = 0;
        // }




        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('nestedpost', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $nestedpost = new NestedPosts;
            $nestedpost->parent_id        =     $parent_id;
            $nestedpost->title            =     $request->title;
            $nestedpost->slug             =     str_slug($request->title);
            $nestedpost->image_name       =     $request->file->hashName();
            $nestedpost->image_alt        =     $request->img_alt;
            $nestedpost->description      =     $request->description;
            $nestedpost->meta_title       =     $request->meta_title;
            $nestedpost->meta_description =     $request->meta_description;

            $nestedpost->save(); // Finally, save the record.
        }
        
        return redirect()->route('admin.npost.sub', $parent_id)->with('success','Sub Post has been added');
    }

        //Sub Post edit
        public function subedit($id)
        {
            $post = NestedPosts::find($id);
            return view('backend.nestedpost.nestedpostsub.edit', compact('post'));
        }

}
