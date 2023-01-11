<?php

namespace App\Http\Controllers;

use App\Models\UserStory;
use App\Models\Umls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();

        $uml = Umls::where('user_id', $user_id)->get();

        if ($uml->isEmpty()){
            return view('no_submission');
        }else{
            return view('my_submission', compact('uml'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('make_submission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $request->validate([
            'stories.*' => 'required',
            'project' => 'required',
            'uml_diagram' => 'required',
        ]);

        $uml = new Umls;
        $image = $request->uml_diagram;
        $uml->user_id = $user_id;
        $uml->project_name = $request->project;

        $image_name = $image->getClientOriginalName();
        $image->storeAs('public/images', $image_name);
        $uml->image = $image_name;


        $uml->save();

        foreach ($request->stories as $key => $value) {
            $story = new UserStory;
            $story->user_story = $value;
            $story->uml_id = $uml->id;
            $story->user_id = $request->user_id;
            $story->save();
        }
        return redirect()->route('submit.index')->with('success', 'User stories have been added succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umls $umls
     * @return \Illuminate\Http\Response
     */
    public function show($umls)
    {
        $userStory = UserStory::where('uml_id', $umls)->get();
        $uml = Umls::find($umls);


        return view('uml.uml_details', compact('userStory', 'uml'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserStory  $userStory
     * @return \Illuminate\Http\Response
     */
    public function edit($userStory)
    {

        $user_story = UserStory::find($userStory);
        $uml_id = $user_story->uml_id;

        return view('user_stories.edit_stories', compact('user_story', 'uml_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserStory  $userStory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userStory)
    {
        $request->validate([
            'new_user_story' => 'required',
        ]);

        $user_story = UserStory::find($userStory);
        $uml_id = $user_story->uml_id;

        $value = $request->new_user_story;
        $user_story->user_story = $value;
        $user_story->save();

        return redirect()->route('submit.show', $uml_id)->with('success','User story has been successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserStory  $userStory
     * @return \Illuminate\Http\Response
     */
    public function destroy($userStory)
    {
        $user_story = UserStory::find($userStory);
        $uml_id = $user_story->uml_id;
        // echo $uml_id;
        $uml = Umls::where('id', $uml_id)->first();
        // echo $uml;
        $user_story->delete();
        return redirect()->route('submit.show', $uml_id)->with('danger','User story has been deleted successfully');
    }
}
