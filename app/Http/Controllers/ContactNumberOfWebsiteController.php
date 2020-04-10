<?php

namespace App\Http\Controllers;

use App\ContactNumberOfWebsite;
use Illuminate\Http\Request;

class ContactNumberOfWebsiteController extends Controller
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
            'number'=>'required|max:15',
        ]);

        $number= new ContactNumberOfWebsite();
        $number->name=$request->input('name');
        $number->icon=$request->input('icon');
        $number->number=$request->input('number');
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
