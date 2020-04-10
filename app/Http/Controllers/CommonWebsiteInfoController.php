<?php

namespace App\Http\Controllers;

use App\CommonWebsiteInfo;
use http\Exception;
use Illuminate\Http\Request;
use Image;

class CommonWebsiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommonWebsiteInfo  $commonWebsiteInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CommonWebsiteInfo $commonWebsiteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommonWebsiteInfo  $commonWebsiteInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $this->validate($request,[
            'logo'=>'nullable|image|max:500',
            'favicon'=>'nullable|image|max:500',
            'status'=>'required|max:1',
            'name'=>'required|max:50',
            'domain'=>'required|max:50',
            'copy_right'=>'nullable|max:100',
            'background_color'=>'nullable|max:100',
            'support_bar_color'=>'nullable|max:100',
            'nav_bar_color'=>'nullable|max:100',
            'banner_color'=>'nullable|max:100',
            'footer_color'=>'nullable|max:100',
            'special_color'=>'nullable|max:100',
        ]);


        $c_information= CommonWebsiteInfo::find(1);

        $c_information->status=$request->input('status');
        $c_information->name=$request->input('name');
        $c_information->domain=$request->input('domain');
        $c_information->copy_right=$request->input('copy_right');
        $c_information->background_color=$request->input('background_color');
        $c_information->support_bar_color=$request->input('support_bar_color');
        $c_information->nav_bar_color=$request->input('nav_bar_color');
        $c_information->banner_color=$request->input('banner_color');
        $c_information->footer_color=$request->input('footer_color');
        $c_information->special_color=$request->input('special_color');

        //Auto resize with 180 wide/ 50 height
        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $OriginalExtension = $image->getClientOriginalExtension();
            $image_name = time() . 'common-logo.' . $OriginalExtension;
            $destinationPath = ('uploads/images');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(180, 50, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);
            $c_information->logo = $image_name;
        }

        //Auto resize with 20 wide/ 20 height
        if($request->hasFile('favicon')){
            $image = $request->file('favicon');
            $OriginalExtension = $image->getClientOriginalExtension();
            $image_name = time() . 'common-favicon.' . $OriginalExtension;
            $destinationPath = ('uploads/images');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(20, 20, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);
            $c_information->favicon = $image_name;
        }

        try{
            $c_information->save();
            session()->flash('message','Successfully Updated.');
            session()->flash('type','success');
            return  redirect()->route('BackEndControllerSetting');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommonWebsiteInfo  $commonWebsiteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommonWebsiteInfo $commonWebsiteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommonWebsiteInfo  $commonWebsiteInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommonWebsiteInfo $commonWebsiteInfo)
    {
        //
    }
}
