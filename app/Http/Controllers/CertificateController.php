<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\QuestionAnswer;
use App\Result;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qa = QuestionAnswer::All();
        return view('certificate.form',compact('qa'));
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
        $qa = QuestionAnswer::All();

        foreach ($qa as $qa) {

            $this->validate($request,[
                'YouNeedToAnswerQuestionNumber'.$qa->id=>'required|max:1',
            ]);

            $result= new Result();
            $result->question_id=$qa->id;
            $result->question=$qa->question;
            $result->correct_ans=$qa->answer;

            $result->given_ans=$request->input('customRadioInline2_id_'.$qa->id);
            if($qa->answer == $request->input('customRadioInline2_id_'.$qa->id)){
                $result->mark=1;
            }else{
                $result->mark=0;
            }
            $result->save();
        }

        try{
            session()->flash('message','Successfully Store.');
            session()->flash('type','success');
            return view('certificate.certificate');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
