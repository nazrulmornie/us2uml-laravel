<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function successEmail(){
        return redirect()->back()->with('success', 'Thank you! Your email has been received!');
    }
}
