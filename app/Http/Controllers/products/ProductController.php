<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Categories::all();
        $products   = Products::with('category')->get();
        // dd($products);
        // return $products['categories']['title'];
        return view('backend.products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backend.products.add',compact('categories'));
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
            $request->file->store('products', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $products                         =     new Products;
            $products->title                  =     $request->title;
            $products->slug                   =     str_slug($request->title);
            $products->image_name             =     $request->file->hashName();
            $products->image_alt              =     $request->img_alt;
            $products->description            =     $request->description;
            $products->short_description      =     $request->short_description;
            $products->affiliate_link         =     $request->affiliate_link;
            $products->price                  =     $request->price;
            $products->mrp                    =     $request->mrp; 
            $products->manufacture            =     $request->manufacture;
            $products->expire                 =     $request->expire;
            $products->qty                    =     $request->qty;
            $products->category_id            =     $request->category;
            $products->sales                  =     $request->sale;
            $products->meta_title             =     $request->meta_title;
            $products->meta_description       =     $request->meta_description;

            $products->save(); // Finally, save the record.
        }

        return redirect()->route('admin.product')->with('success','Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);
        return view('apollo.health-package-details',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =   Products::with('category')->where('id', $id)->first();
        $categories = Categories::all();
        return view('backend.products.edit', compact('product','categories'));
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
            'img_alt'           => 'required|string',
        ]);

        $products                           =     Products::find($id);
        $products->title                    =     $request->title;
        $products->slug                     =     str_slug($request->title);

        $products->image_alt                =     $request->img_alt;
        $products->description              =     $request->description;
        $products->short_description        =     $request->short_description;
        $products->affiliate_link           =     $request->affiliate_link;
        $products->price                    =     $request->price;
        $products->mrp                      =     $request->mrp; 
        $products->manufacture              =     $request->manufacture;
        $products->expire                   =     $request->expire;
        $products->qty                      =     $request->qty;
        $products->category_id              =     $request->category;
        $products->sales                    =     $request->sale;
        $products->meta_title               =     $request->meta_title;
        $products->meta_description         =     $request->meta_description;
        

        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('products', 'public');
            $products->image_name = $big_file->hashName();
        } 

        $products->save(); // Finally, update the record.
        return redirect()->route('admin.product')->with('success','Product Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        @unlink(public_path('storage/products/'.$products->image_name));
        $products->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Product has been deleted');
    }
}
