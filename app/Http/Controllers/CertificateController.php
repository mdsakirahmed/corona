<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\CommonWebsiteInfo;
use App\Marks;
use App\QuestionAnswer;
use App\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function __construct()
    {

        // Check the website Installation
        try {
            $WebsiteInstallation = CommonWebsiteInfo::find(1);
        } catch (\Exception $e) {
            // check for installation
            if (!File::exists('core/storage/installed')) {
                Redirect::to('/install')->send();
            }
        }

        // Check the website Status
        if (CommonWebsiteInfo::find(1)->status != 1) {
            //Website shutdown tim view
            echo "
            <html>
<head>
    <title>Power Off</title>
    <style>
        :root {
            --gray: #e0e5ec;
            --size: 25vw;
            --scalingFactor: calc(100 / 25); /*related to size*/
        }

        body {
            background: var(--gray);
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: sans-serif;
        }
        .dot, .trigger {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            height: var(--size);
            width: var(--size);
            margin: 10px;
            background: var(--gray);
            box-shadow: 5px 5px 10px rgba(163, 177, 198, 0.6), -5px -5px 10px rgba(255, 255, 255, 0.5);
            border-radius: 50%;
        }
        .trigger {
            z-index: 3;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(0,0,0,0.5);
            letter-spacing: 0.05em;
            cursor: pointer;
        }
        .trigger:before {
            content:'click me'
        }
        #trigger:checked + .trigger:before {
            content: 'Under Development'
        }

        #trigger:checked + .trigger + .dots > .dot {
            animation-name: wave;
            animation-timing-function: ease-in-out;
            animation-duration: 2s;
            animation-fill-mode: forwards;
        }
        .dot {
            opacity: 1;
            transform: translate3d(-50%,-50%,0) scale3d(0,0,1);
        }
        .dot:nth-of-type(2) {
            z-index: 1;
            animation-delay: .5s;
        }
        .dot:nth-of-type(3) {
            z-index: 2;
            animation-delay: 1s;
        }

        @keyframes wave{
            0% {
                opacity: 1;
                transform: translate3d(-50%,-50%,0) scale3d(1,1,1);
            }
            100% {
                opacity: 0;
                transform: translate3d(-50%,-50%,0) scale3d(var(--scalingFactor),var(--scalingFactor),1);
            }
        }

    </style>

    <script>

    </script>
</head>
<body>

<input id=\"trigger\" type=\"checkbox\" hidden>
<label class=\"trigger\" for=\"trigger\"></label>
<div class=\"dots\">
    <div class=\"dot\"></div>
    <div class=\"dot\"></div>
    <div class=\"dot\"></div>
</div>


</body>
</html>

            ";
            exit();
        }else{
            $this->middleware('auth');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qa             =   QuestionAnswer::All();
        $c_information  =   CommonWebsiteInfo::find(1);
        return view('certificate.form',compact('qa','c_information'));
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

        $count_question=0;
        $count_marks=0;
        foreach ($qa as $qa) {

            $count_question++;

            $this->validate($request,[
                'YouNeedToAnswerQuestionNumber'.$qa->id=>'required|max:1',
            ]);

            //DB
            $result= new Result();

            $result->user_id=Auth::user()->id;
            $result->question_id=$qa->id;
            $result->question=$qa->question;
            $result->correct_ans=$qa->answer;

            $result->given_ans=$request->input('customRadioInline2_id_'.$qa->id);
            if($qa->answer == $request->input('customRadioInline2_id_'.$qa->id)){

                $count_marks++;
                $result->mark=1;
            }else{

                $result->mark=0;
            }

            $result->save();
        }

        $mark= new Marks();
        $mark->user_id = Auth::user()->id;
        $mark->user_name = Auth::user()->name;
        $mark->user_image = Auth::user()->avatar;
        $mark->exam_time = Carbon::today()->toDateString();
        $mark->total_marks = $count_question;
        $mark->got_mark = $count_marks;

        try{

            $mark->save();
            session()->flash('message','Successfully Store.');
            session()->flash('type','success');
            $c_information  =   CommonWebsiteInfo::find(1);
            $certificate  =   Certificate::find(1);
            $new_mark = Marks::latest()->where('user_id',  Auth::user()->id)->first();
            //$user = DB::table('users')->where('name', 'John')->first();
           // $this->middleware('auth');

                return view('certificate.certificate',compact('c_information','certificate','new_mark'));

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
