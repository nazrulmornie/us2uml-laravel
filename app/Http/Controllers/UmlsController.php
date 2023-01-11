<?php

namespace App\Http\Controllers;

use App\Models\Umls;
use Illuminate\Http\Request;

class UmlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Umls  $umls
     * @return \Illuminate\Http\Response
     */
    public function show(Umls $umls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umls  $umls
     * @return \Illuminate\Http\Response
     */
    public function edit($umls)
    {
        $uml = Umls::find($umls);
        return view('uml.update_uml', compact('uml'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umls  $umls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $umls)
    {
        $uml = Umls::find($umls);

        $image = $request->new_uml_diagram;

        if (!empty ($image)){
            $image_name = $image->getClientOriginalName();
            $image->storeAs('public/images', $image_name);
            $uml->image = $image_name;

            if(!empty ($request->project_title)){
                $uml->project_name = $request->project_title;
                $uml->save();
            }else{
                $uml->save();
            }
        }
        else
        {
            if(!empty ($request->project_title)){
                $uml->project_name = $request->project_title;
                $uml->save();
            }
        }

        return redirect()->route('add-uml.edit', $umls)->with('success', 'UML info succesfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umls  $umls
     * @return \Illuminate\Http\Response
     */
    public function destroy($umls)
    {
        $uml = Umls::find($umls);

        $uml->delete();
        // $user_story->delete();
        return redirect()->back()->with('danger','User story has been deleted successfully');
    }
}
