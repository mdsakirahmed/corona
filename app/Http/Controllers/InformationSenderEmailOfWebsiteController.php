<?php

namespace App\Http\Controllers;

use App\InformationSenderEmailOfWebsite;
use Illuminate\Http\Request;

class InformationSenderEmailOfWebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            'driver'=>'nullable|max:50',
            'host'=>'nullable|max:50',
            'port'=>'nullable|max:50',
            'user_name'=>'nullable|max:50',
            'password'=>'nullable|max:50',
            'encryption'=>'nullable|max:50',
            'no_reply'=>'nullable|max:50',
            'receiver_email'=>'nullable|max:50',
            'receive_status'=>'nullable|max:50',
        ]);

        $InformationSender= InformationSenderEmailOfWebsite::find(1);

        $InformationSender->driver=$request->input('driver');
        $InformationSender->host=$request->input('host');
        $InformationSender->port=$request->input('port');
        $InformationSender->user_name=$request->input('user_name');
        $InformationSender->password=$request->input('password');
        $InformationSender->encryption=$request->input('encryption');
        $InformationSender->no_reply=$request->input('no_reply');
        $InformationSender->receiver_email=$request->input('receiver_email');
        $InformationSender->receive_status=$request->input('receive_status');
        try{
            $InformationSender->save();
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
