<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Careercat;
use App\Career;
use App\Careerhead;
use App\Shortlisted;
use App\Jobapplied;
use Carbon;
use DB;
use Zipper;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = [];
        $data['cat'] = Careercat::all();
        $data['job'] = Career::all();
        $data['careerhead'] = Careerhead::find(1);
        return view('Backend.career.career',compact('data'));
    }
    public function careerheadupdate(Request $request){
        $id = $request->id;
        $careerHead = Careerhead::find($id);
        if($request->file('image')){
            $find_image = Careerhead::find($id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('psimage'), $new_name);
        $careerHead = Careerhead::find($id);
        $careerHead->title = $request->title;
        $careerHead->image = 'psimage/'.$new_name;
        $careerHead->save();
        return response()->json($careerHead);
        }else{
        $careerHead = Careerhead::find($request->id);
        $careerHead->title = $request->title;
        $careerHead->save();
        return response()->json($careerHead);
        }
    }
    public function careercatstore(Request $request){
        $careerCat = new Careercat();
        $careerCat->title = $request->title;
        $careerCat->save();
        return response()->json($careerCat);
    }
    
    public function careercatedit(Request $request){
        $id = $request->id;
        $careerCat = Careercat::find($id);
        return response()->json($careerCat);
    }
    public function careercatupdate(Request $request){
        $id = $request->id;
        $careerCat = Careercat::find($id);
        $careerCat->title = $request->title;
        $careerCat->save();
        return response()->json($careerCat);
    }
    public function careercatdelete(Request $request){
        $id = $request->id;
        $careerCat = Careercat::find($id);
        $careerCat->delete();
        return response()->json('deleted');
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
    
        $career = new Career();
        $career->title = $request->title;
        $career->company = $request->company;
        $career->experience = $request->experience;
        $career->vacancy = $request->vacancy;
        $career->education = $request->education;
        $career->deadline = $request->deadline;
        $career->location = $request->location;
        $career->salary = $request->salary;
        $career->catid = $request->catid;
        $career->posteddate = date('d/m/Y');
        $career->topdescription = $request->topdescription;
        $career->howtoapply = $request->howtoapply;
        $career->responsibilitiestext = $request->responsibilitiestext;
        if($request->program){
            $career->responsibilitiespoint = json_encode($request->program);
        }
        if($request->qualification){
            $career->qualification = json_encode($request->qualification);
        }
         $career->save();
         return response()->json($career);
    }
    public function careeredit(Request $request){
     $id = $request->id;
     $data['careerbyid']  = Career::find($id);
     $data['cat'] = Careercat::all();
     return view('Backend.career.editcareer',compact('data'));

    }
    public function careerupdate(Request $request){

        $career = Career::find($request->id);
        $career->title = $request->title;
        $career->company = $request->company;
        $career->experience = $request->experience;
        $career->vacancy = $request->vacancy;
        $career->education = $request->education;
        $career->deadline = $request->deadline;
        $career->location = $request->location;
        $career->salary = $request->salary;
        $career->catid = $request->catid;
        $career->topdescription = $request->topdescription;
        $career->howtoapply = $request->howtoapply;
        $career->responsibilitiestext = $request->responsibilitiestext;
        if($request->program){
            $career->responsibilitiespoint = json_encode($request->program);
        }
        if($request->qualification){
            $career->qualification = json_encode($request->qualification);
        }
        $career->save();
        return redirect()->route('careerop.index');
        // $findPrevious->delete();
        // $data = $request->all();
        // return $data;
    }
    public function careerdelete(Request $request){
     $id = $request->id;
     $careerByid  = Career::find($id);
     $careerByid->delete();
    }

    public function detailsjob(Request $request){

        $id = $request->id;
        $data['careerbyid']  = Career::find($id);
        $data['cat'] = Careercat::all();
        return view('Backend.career.detailjob',compact('data','id'));  

    }
    public function applicantlist(Request $request){
        $id = $request->id;
        $applicantByjobid = DB::table('users')
                             ->select('users.name','users.email','users.mobile','users.id','cvforms.id as cvid','jobapplieds.job_id as jobid')
                             ->LeftJoin('jobapplieds','users.id','=','jobapplieds.applicant_id')
                             ->LeftJoin('cvforms','users.id','=','cvforms.userid')
                             ->where('jobapplieds.job_id','=',$id)
                             ->get();
        return view('Backend.career.applicantlist',compact('applicantByjobid','id'));

    }
    public function shortlistapplicatn(Request $request){
        $findPrevious = Shortlisted::where('job_id',$request->jobid)->where('user_id',$request->userid)->first();
        if($findPrevious){
            return response()->json('warning');
        }else{
            $shortlistedApplicant = new Shortlisted();
            $shortlistedApplicant->job_id = $request->jobid;
            $shortlistedApplicant->user_id = $request->userid;
            $shortlistedApplicant->save();
            return response()->json('success');
        }
        
    }
    public function shortlistedapplicantlist(Request $request){
        $jobid = $request->id;
        $findShortlistedapplicant = DB::table('users')
                                   ->select('users.name','users.email','users.mobile','users.id','cvforms.id as cvformsid','shortlisteds.id as shortlistid')
                                   ->LeftJoin('cvforms','cvforms.userid','=','users.id')
                                   ->LeftJoin('shortlisteds','shortlisteds.user_id','users.id')
                                   ->where('shortlisteds.job_id',$jobid)
                                   ->get();
        return view('Backend.career.shortlistedapplicantlist',compact('findShortlistedapplicant','jobid'));
    }
    public function unsort(Request $request){
      $id = $request->id;
      $findunSortid = Shortlisted::find($id);
      $findunSortid->delete();
      return response()->json('deleted');
    }
    public function singlezip(Request $request){
        
        $zipper = new \Chumper\Zipper\Zipper;
        $zipableFile = Jobapplied::where('job_id','=',2)->get();
        foreach($zipableFile as $article) {
            $files = public_path('careerfile/'.$article->pdf);
        \Zipper::make(public_path('2.zip'))->add($files);
            } 
            $zipper->close(); 
            // $previous_zip = public_path('2.zip');
            return $response = response()->download(public_path('2.zip')); 

           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
