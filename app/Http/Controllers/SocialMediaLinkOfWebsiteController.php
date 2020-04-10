<?php

namespace App\Http\Controllers;

use App\SocialMediaLinkOfWebsite;
use Illuminate\Http\Request;

class SocialMediaLinkOfWebsiteController extends Controller
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
            'link'=>'required|max:250',
        ]);
        $social= new SocialMediaLinkOfWebsite();
        $social->name=$request->input('name');
        $social->icon=$request->input('icon');
        $social->link=$request->input('link');
        try{
            $social->save();
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
