<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Sliderbtm;
use App\Servetop;
use App\Allservices;
use App\Locationtop;
use App\Alllocations;
use App\Hcall;
use App\Teamtop;
use App\Teammembers;
use App\Monialtop;
use App\Testimonials;
use App\Counterpart;
use App\Servicehead;
use App\Cvform;
use App\User;
class PeoplesscapeHomeController extends Controller
{
    public function index(){
        $data = [];
        $data['slider']= Slider::orderBy('id','desc')->get();
        $data['sliderbtm']= Sliderbtm::find(1);
        $data['servtop']= Servetop::find(1);
        $data['allservice']= Allservices::all();
        $data['locationtop']= Locationtop::find(1);
        $data['alllocations']= Alllocations::all();
        $data['hcall']= Hcall::find(1);
        $data['teamtop']= Teamtop::find(1);
        $data['teammembers']= Teammembers::all();
        $data['monialtop'] = Monialtop::find(1);
        $data['testimonial'] = Testimonials::all();
        $data['counterpart'] = Counterpart::find(1);
       return view('Frontend.home',compact('data'));
    }

    public function cvform(){
        $data=[]; 
        $data['servicehead'] = Servicehead::find(1);
        return view('Frontend.cvcreate',compact('data'));
    }
    public function cvformstore(Request $request){
        $image = $request->file('image');
        $new_name_image =$request->name.'.'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('careerfile'), $new_name_image);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->gender = $request->gender;
        $user->status = "user";
        $user->password = bcrypt($request->password);
        $user->image ='careerfile/'.$new_name_image;
        $user->save();
        if($request->file('cv')){
            $image = $request->file('cv');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('careerfile'), $new_name);
        }
        $cvform  = new Cvform();
        $cvform->userid = $user->id;
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
        // view()->share('careerInfoByid',$cvform);
        // $pdf = PDF::loadView('myPDF');
        // return $pdf->download('download.pdf');

        // $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        // $filename = "generatepdf23.pdf";
        // Save file to the directory
        // $pdf->save('careerfile/'.$filename);
        //Download Pdf
        // return $pdf->download('generatepdf.pdf');
        
        $notification = array(
            'message' => 'Success! You can Login Now', 
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);

    }

    public function emailchk(Request $request){
        $email = $request->email_address;
        $find_email = User::where('email','=',$email)->first();
        if($find_email){
            return response()->json('Exist');
        }else{
            return response()->json('NotExist');
        }
    }
    public function passchk(Request $request){
        $pass= $request->pass;
        // return response()->json($pass);
        $email = $request->email;
        $find_email = User::where('email','=',$email)->first();
        if($find_email){
            $find_pass = $find_email->chkpassword;
            if($find_pass == $pass){
                return response()->json('Exist'); 
            }else{
                return response()->json('NotExist');
            }
        }else{
            return response()->json('NotExist');
        }
        

    }
    public function pdfview(Request $request)
    {   
        $id = $request->id;
        $careerInfoByid = Cvform::findorfail($id);
        view()->share('careerInfoByid',$careerInfoByid);
        // $pdf = PDF::loadView( 'myPDF', compact('careerInfoByid'))->save( 'careerfile/pdfname.pdf' );
        $pdf = PDF::loadView('myPDF');
        return view('myPDF');
        // return $pdf->download('itsolutionstuff.pdf');
    }
    public function pdfdownload(Request $request)
    {   
        $id = $request->id;
        $careerInfoByid = Cvform::findorfail($id);
        view()->share('careerInfoByid',$careerInfoByid);
        $pdf = PDF::loadView('download');
        // return $pdf->download('download.pdf');

        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        $filename = "generatepdf.pdf";
        // Save file to the directory
        $pdf->save('careerfile/'.$filename);
        //Download Pdf
        return $pdf->download('generatepdf.pdf');
    }
    public function unqemailchk(){
        $user = User::where('email', Input::get('email'))->first();
        if ($user) {
            return response()->json('Email is already taken');
        } else {
            
            return response()->json('true');
        }
    }
}
