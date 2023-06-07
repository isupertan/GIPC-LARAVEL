<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\NestedPosts;
use App\Models\Widget;
use App\Models\Footer;
use App\Models\Topmenu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::with('page')->get();
        $pages = NestedPosts::all();
        // dd($menus);
        
        return view('backend.setting.list', compact('menus','pages'));
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
            'menu'              => 'required',
        ]);

        if ($request->parent_id == "") {
            $parent_id = 0;
        } else {
            $parent_id = $request->parent_id;
        }


        $menu                   =     new Menu;
        $menu->parent_id        =     $parent_id;
        $menu->page_id          =     $request->menu;
        $menu->status           =     $request->status;

        $menu->save(); // Finally, save the record.
        
        return redirect()->back()->with('success', 'Main Menu Has been Added');
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
        $menu = Menu::find($id);
        $menu->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Menu has been deleted');
    }

    //sub post 
    public function subindex($id){
        $menus = Menu::with('page')->get();
        $parentMenu = Menu::with('page')->where('id', $id)->first();
        $pages = NestedPosts::all();
        // dd($menus);
        
        return view('backend.setting.sublist', compact('menus','pages','parentMenu'));
    }

    //view all footer widget
    public function footer(){
        $widgets = Widget::all();
        return view('backend.setting.footermenu', compact('widgets'));
    }
    //create widget
    public function widgetstore(Request $request){

        $this->validate($request, [
            'widget_name'              => 'required',
        ]);

        $widget                     =     new Widget;
        $widget->title              =     $request->widget_name;
        $widget->save(); // Finally, save the record.
        
        return redirect()->back()->with('success', 'New Widget has been created');
    }


    //GEt All footer menu  related to qwidget
    public function footermenu($id){
        $widget   = Widget::with('footer')->where('id', $id)->first();

        // dd($widget);
        $footers  = Footer::with('widget')->where('widget_id', $id)->get();

        // dd($footers);
        return view('backend.setting.addfootermenu', compact('footers','widget'));
    }

    //Add the Menu accoridng to Widget
    public function footermenustore(Request $request){
        $this->validate($request, [
            'widget_id'         => 'required',
            'title'             => 'required',
            'link'              => 'required',
        ]);

        $Footer                         =     new Footer;
        $Footer->widget_id              =     $request->widget_id;
        $Footer->title                  =     $request->title;
        $Footer->link                   =     $request->link;
        $Footer->save(); // Finally, save the record.
        
        return redirect()->back()->with('success', 'New Menu has been created');
    }

    //delet footer menu 
    public function footerdestroy($id)
    {
        $footer = Footer::find($id);
        $footer->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Footer Link has been deleted');
    }

    //delet Widget menu 
    public function footerwidget($id)
    {
        $Widget = Widget::find($id);
        $Widget->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Widget has been deleted');
    }

    public function topmenu()
    {
        $menus = Topmenu::with('page')->get();
        $pages = NestedPosts::all();
        // dd($menus);
        
        return view('backend.setting.topmenu', compact('menus','pages'));
    }

    public function topmenustore(Request $request)
    {
        $this->validate($request, [
            'menu'              => 'required',
        ]);

        $Topmenu                   =     new Topmenu;
        $Topmenu->page_id          =     $request->menu;
        $Topmenu->save(); // Finally, save the record.
        
        return redirect()->back()->with('success', 'Top Menu Has been Added');
    }

    public function topmenudestroy($id)
    {
        $footer = Topmenu::find($id);
        $footer->delete();
        return redirect()->back()->with('success','Top Menu Has Been Removed');
    }
    


}
