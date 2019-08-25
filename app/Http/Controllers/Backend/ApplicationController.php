<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cvform;
use App\User;
use DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $cv = Cvform::orderBy('id','desc')->get();
        return view('Backend.application.application',compact('cv'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $careerInfoByid = Cvform::findorfail($id);
        return view('Backend.application.singleapplication',compact('careerInfoByid'));
    }
    public function cvformforuserdash(){
        return view('Backend.application.createyourcv');
    }
    public function applicantprofile(Request $request){
        $id = $request->id;
        $user_info = User::findorfail($id);
        return view('Backend.application.profile',compact('user_info'));
    }
    public function usercv(){
        return response()->json('redirect');
    }
    public function yourcvstore(Request $request){
        $image = $request->file('image');
        $new_name_image =$request->name.'.'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('careerfile'), $new_name_image);
        $user =  User::findorfail($request->userid);
        $user->image ='careerfile/'.$new_name_image;
        $user->save();
        $image = $request->file('cv');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('careerfile'), $new_name);
        $cvform  = new Cvform();
        $cvform->userid = $request->userid;
        $cvform->name = $request->name;
        $cvform->birthdate = $request->birthdate;
        $cvform->paddress = $request->paddress;
        $cvform->haddress = $request->haddress;
        $cvform->mobile = $request->mobile;
        $cvform->email = $request->email;
        $cvform->interest = $request->interest;
        $cvform->objective = $request->objective;
        $cvform->cv ='careerfile/'.$new_name;

        if($request->academic){
            $cvform->academic = json_encode($request->academic);
        }
        if($request->experience){
            $cvform->experience =json_encode($request->experience);
        }
        if($request->project){
            $cvform->project =json_encode($request->project);
        }
        if($request->achievement){
            $cvform->achievement = json_encode($request->achievement);
        }
        if($request->skill){
            $cvform->skill = json_encode($request->skill);
        }if($request->reference){
            $cvform->reference = json_encode($request->reference);
        }
        $cvform->save();

        
        $notification = array(
            'message' => 'Your Cv has submitted successfully', 
            'alert-type' => 'success'
        );
        
        return redirect('/home')->with($notification);
    }
    
    public function applyhistory(Request $request){
        $id  = $request->id;
        $applicantByjobid = DB::table('users')
                             ->select('users.id','jobapplieds.job_id as jobid','careers.title','careers.company','careers.deadline','jobapplieds.applied_time')
                             ->LeftJoin('jobapplieds','users.id','=','jobapplieds.applicant_id')
                             ->LeftJoin('careers','careers.id','=','jobapplieds.job_id')
                             ->where('jobapplieds.applicant_id','=',$id)
                             ->get();
        return view('Backend.application.appliedhistory',compact('applicantByjobid'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
