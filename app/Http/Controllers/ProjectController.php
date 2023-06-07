<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mmodels\Projects;

class ProjectController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return view('backend.project.list', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $projects = Projects::all();
        return view('backend.project.add');

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
            'project_detail' => 'required|string',
        ]);


        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('project', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $projects = new Projects;
            $projects->title = $request->title;
            $projects->project_img = $request->file->hashName();
            $projects->project_details = $request->project_detail;

            $projects->save(); // Finally, save the record.
        }
        return redirect()->route('admin.project')->with('success','Project has been uplaoded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Projects::find($id);
        return view('frontend.project-listing',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Projects::find($id);
        return view('backend.project.edit', compact('project'));
        
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
            'project_detail' => 'required|string',
        ]);

        $projects = Projects::find($id);
        $projects->title = $request->title;
        $projects->project_details = $request->project_detail;


        // if ($request->hasFile('file')) {old_image
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('project', 'public');
            $projects->project_img = $big_file->hashName();

            // $request->validate([
            //     'image' => 'mimes:jpeg,bmp,png' 
            // ]);
            // $request->file->store('project', 'public');
            // $projects->project_img = $request->file->hashName();
        } 


            $projects->save(); 
        // }
        return redirect()->route('admin.project')->with('success','Project has been Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projects::find($id);
        @unlink(public_path('storage/project/'.$projects->project_img));
        $projects->delete();

        return redirect()->route('admin.project')->with('success','project has been deleted');
    }
}
