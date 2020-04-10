<?php

namespace App\Http\Controllers;

use App\EmailAddressOfWebsite;
use Illuminate\Http\Request;

class EmailAddressOfWebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:50',
            'icon'=>'required|max:50',
            'email'=>'required|max:50| email',
        ]);

        $number= new EmailAddressOfWebsite();
        $number->name=$request->input('name');
        $number->icon=$request->input('icon');
        $number->email=$request->input('email');
        try{
            $number->save();
            session()->flash('message','Successfully Store.');
            session()->flash('type','success');
            return  redirect()->route('BackEndControllerSetting');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }
    }

}
