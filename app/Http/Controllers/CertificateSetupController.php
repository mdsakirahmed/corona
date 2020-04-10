<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\CommonWebsiteInfo;
use http\Exception;
use Illuminate\Http\Request;
use Image;

class CertificateSetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //CertificateSetup
    public function CertificateSetup(){
        $c_information  =   CommonWebsiteInfo::find(1);
        $certificate  =   Certificate::find(1);
        return view('back-end.certificate', compact('c_information','certificate'));
    }

    //CertificateEdit
    public function CertificateEdit(Request $request)
    {
        //
        $this->validate($request,[
            'certificate'=>'required|max:50',
            'which_certificate'=>'required|max:100',
            'summary'=>'required|max:100',
            'award'=>'required|max:100',
            'signature1'=>'image|max:2000',
            'signature2'=>'image|max:2000',
            'name1'=>'required|max:50',
            'name2'=>'required|max:50',
            'designation1'=>'required|max:50',
            'designation2'=>'required|max:50',
            'background_color'=>'required|max:50',
            'site_bar_color'=>'required|max:50',
        ]);


        $certificate  = Certificate::find(1);

        $certificate->    certificate         =$request->input('certificate');
        $certificate->    which_certificate   =$request->input('which_certificate');
        $certificate->    summary             =$request->input('summary');
        $certificate->    award               =$request->input('award');
        $certificate->    name1               =$request->input('name1');
        $certificate->    name2               =$request->input('name2');
        $certificate->    designation1        =$request->input('designation1');
        $certificate->    designation2        =$request->input('designation2');
        $certificate->    background_color    =$request->input('background_color');
        $certificate->    site_bar_color      =$request->input('site_bar_color');

        //Auto resize with 150 wide/ 150 height
        if($request->hasFile('signature1')){
            $image = $request->file('signature1');
            $OriginalExtension = $image->getClientOriginalExtension();
            $image_name = time() . 'certificate-signature.' . $OriginalExtension;
            $destinationPath = ('uploads/images');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(150, 150, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);
            $certificate->signature1 = $image_name;
        }

        //Auto resize with 20 wide/ 20 height
        if($request->hasFile('signature2')){
            $image = $request->file('signature2');
            $OriginalExtension = $image->getClientOriginalExtension();
            $image_name = time() . 'certificate-signature.' . $OriginalExtension;
            $destinationPath = ('uploads/images');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(20, 20, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);
            $certificate->signature2 = $image_name;
        }

        try{
            $certificate->save();
            session()->flash('message','Successfully Updated Certificate Design.');
            session()->flash('type','success');
            return  redirect()->route('CertificateSetupControllerCertificateSetup');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }
    }

}
