<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
    public function fileUpload(Request $request)
    {
        $image=$request->file('image');
        $filename=$image->getClientOriginalName();
        $destinationPath=public_path('/images');
        $image->move($destinationPath,$filename);
        return redirect('/dashboard');
    }
}
