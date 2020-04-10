<?php

namespace App\Http\Controllers;

use App\OfficialAddressOfWebsite;
use Illuminate\Http\Request;

class OfficialAddressOfWebsiteController extends Controller
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
            'address'=>'required|max:250',
        ]);

        $number= new OfficialAddressOfWebsite();

        $number->name=$request->input('name');
        $number->icon=$request->input('icon');
        $number->address=$request->input('address');
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
