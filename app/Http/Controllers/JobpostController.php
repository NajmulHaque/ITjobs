<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jobs;
use DB;

class JobpostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
       public function __construct()
       {
            $this->middleware('auth:admin',['except'=>['index','show']]);
       }
       
       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$jobs= Jobs::all();
         $jobs= Jobs::orderBy('created_at','asc')->paginate(2);
        //$pjobs= DB::select('SELECT * FROM jobs');        
         return view('jobposts.indexjob')->with('jobs',$jobs);
        //return view('jobposts.indexjob');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobposts.createjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'job_title'=>'required',
            'job_description'=>'required',
            'salary'=>'required',
            'location'=>'required',
            'country'=>'required'
        ]);

        $job=new Jobs();
        $job->job_title=$request->input('job_title');
        $job->job_description=$request->input('job_description');
        $job->salary=$request->input('salary');
        $job->location=$request->input('location');
        $job->country=$request->input('country');
        // $job->user_id=auth()->user()->id;
        $job->save();

        return redirect('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job= Jobs::find($id);
        return view('jobposts.showjobs')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  $job=Jobs::find($id);
        //   if (auth()->user()->id != $job->user_id) {
        //      return redirect('/jobs')->with('error',"Unauthorised");             
        //   }
        //  return view('jobposts.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'job_title'=>'required',
        //     'job_description'=>'required',
        //     'salary'=>'required',
        //     'location'=>'required',
        //     'country'=>'required'
        // ]);

        // $job=Jobs::find($id);
        // $job->job_title=$request->input('job_title');
        // $job->job_description=$request->input('job_description');
        // $job->salary=$request->input('salary');
        // $job->location=$request->input('location');
        // $job->country=$request->input('country');
        // $job->user_id=auth()->user()->id;
        // $job->save();

        // return redirect('/jobs')->with('success','Job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //$job=Jobs::find($id);
        // if (auth()->user()->id != $job->user_id) {
        //     return redirect('/jobs')->with('error',"Unauthorised");             
        //  }

         //$job->delete();
         //return redirect('/jobs')->with('success','Job Removed');
    }
}
