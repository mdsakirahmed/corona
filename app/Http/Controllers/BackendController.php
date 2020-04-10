<?php

namespace App\Http\Controllers;

use App\QuestionAnswer;
use App\User;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Dashboard
    public function dashboard(){
        return view('back-end.dashboard');
    }
    //QuestionAnswer
    public function QuestionAnswer(){
        $qa = QuestionAnswer::All();
        return view('back-end.question-answer',compact('qa'));
    }
    //QuestionAnswer insert
    public function InsertQuestionAnswer(Request $request)
    {
        $this->validate($request,[
            'question'=>'required|unique:question_answers|max:250',
            'option1'=>'required|max:50',
            'option2'=>'required|max:50',
            'option3'=>'required|max:50',
            'option4'=>'required|max:50',
            'answer'=>'required|max:1',
        ]);

        $qa= new QuestionAnswer();
        $qa->question=$request->input('question');
        $qa->option1=$request->input('option1');
        $qa->option2=$request->input('option2');
        $qa->option3=$request->input('option3');
        $qa->option4=$request->input('option4');
        $qa->answer=$request->input('answer');
        $qa->status=1;

        try{
            $qa->save();
            session()->flash('message','Successfully Insert This Question.');
            session()->flash('type','success');
            return  redirect()->route('BackendControllerQuestionAnswer');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }

    }

    //EditQuestionAnswer update
    public function EditQuestionAnswer (Request $request, $id)
    {
        $this->validate($request,[
            'question'=>'required|max:250',
            'option1'=>'required|max:50',
            'option2'=>'required|max:50',
            'option3'=>'required|max:50',
            'option4'=>'required|max:50',
            'answer'=>'required|max:1',
        ]);

        $qa = QuestionAnswer::find($id);
        $qa->question=$request->input('question');
        $qa->option1=$request->input('option1');
        $qa->option2=$request->input('option2');
        $qa->option3=$request->input('option3');
        $qa->option4=$request->input('option4');
        $qa->answer=$request->input('answer');
        $qa->status=1;

        try{
            $qa->save();
            session()->flash('message','Successfully Update This Question.');
            session()->flash('type','success');
            return  redirect()->route('BackendControllerQuestionAnswer');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }

    }
    //QuestionAnswerEdit
    public function QuestionAnswerEdit($id){
        $qa = QuestionAnswer::find(Crypt::decryptString($id));
        return view('back-end.edit-question-answer', compact('qa'));
    }
    //User
    public function user(){
        $user = User::All();
        return view('back-end.user',compact('user'));
    }
    //User
    public function InsertUser(Request $request){
        $this->validate($request,[
            'name'             => 'required',
            'email'            => 'required|email|unique:users',
            'phone'            => 'required',
            'password'         => 'required|min:8',
            'password_confirm' => 'required|same:password'
        ]);

        $user= new User();
        $user->name     =$request->input('name');
        $user->email    =$request->input('email');
        $user->phone    =$request->input('phone');
        $user->password = Hash::make($request->input('password'));

        try{
            $user->save();
            session()->flash('message','Successfully Add User.');
            session()->flash('type','success');
            return  redirect()->route('BackendControllerUser');
        }catch (Exception $exception){
            session()->flash('message','Error');
            session()->flash('type','danger');
            return redirect()->back();
        }
    }
    //
}
