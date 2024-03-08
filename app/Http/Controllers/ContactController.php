<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    //
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nom'=>'required|string|between:3,10',
            'email'=>['bail','email','required'],
            'message'=>'required'
        ]);
        return view('confirm');
    }
}
