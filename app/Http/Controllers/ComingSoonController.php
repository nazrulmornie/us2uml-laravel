<?php

namespace App\Http\Controllers;

use App\Models\ComingSoon;
use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coming_soon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coming_soon');
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
            'email_address' => 'required'
        ]);

        $subscribe = new ComingSoon;
        $subscribe->email_address = $request->email_address;
        $subscribe->save();

        return redirect()->route('coming-soon.index')->with('success','Your email has been received.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComingSoon  $comingSoon
     * @return \Illuminate\Http\Response
     */
    public function show(ComingSoon $comingSoon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComingSoon  $comingSoon
     * @return \Illuminate\Http\Response
     */
    public function edit(ComingSoon $comingSoon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComingSoon  $comingSoon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComingSoon $comingSoon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComingSoon  $comingSoon
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComingSoon $comingSoon)
    {
        //
    }
}
