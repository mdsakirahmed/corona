<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //Public
    public function index()
    {
        return redirect(route('CertificateControllerIndex'));
    }

    //Admin
    public function adminHome()
    {
        return redirect(route('BackendControllerDashboard'));
    }
}
