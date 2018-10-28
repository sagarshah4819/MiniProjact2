<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(){
        return view('pages.contact');
    }
    function store(Request $request) {
        $name = $request->name;
        return redirect()->route('thanks',['name'=> $name ]);
    }
}
