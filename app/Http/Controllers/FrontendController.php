<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\ClientReview;
use App\Models\Resume;
use App\Models\ContectData;
use App\Models\Services;
use App\Models\Careers;
use App\Models\AboutUs;
use DB;
use Hash;
class FrontendController extends Controller {
    public function home() {
        return view('frontend.home');
    }
    public function about() {
         $data = AboutUs::all();
        return view('frontend.aboutus',['homeabout'=>$data]);
    }
    public function services() {
        $data = Services::all();
        return view('frontend.services', ['serviceShow' => $data]);
    }
    public function servicesDetails($slug) {
        $data = DB::table('services')->where('slug', $slug)->get();
        return view('frontend.servicesDetails', ['serviceDetails' => $data]);
    }
    public function contact() {
        return view('frontend.contact-us');
    }
    public function portfolio() {
        return view('frontend.portfolio');
    }
    public function review() {
            $data = ClientReview::all();
        return view('frontend.review', ['reviews' => $data]);
    }
    public function career() {
          $data = Careers::all();
        return view('frontend.career',['careerloop' => $data]);
    }
    public function apply() {
        return view('frontend.applyForm');
    }
    public function submitreview(Request $request) {
        $Validate = Validator::make($request->all(), ['name' => 'required', 'designation' => 'required', 'description' => 'required'], ['name.required' => 'Please Fill The Fullname.', 'designation.required' => 'Please Fill The Designation.', 'description.required' => 'Please Fill The Description.']);
        if ($Validate->fails()) {
            return redirect()->back()->withErrors($Validate->errors());
        } else {
            $data = ClientReview::create(['name' => $request['name'], 'designation' => $request['designation'], 'description' => $request['description'], ]);
            $success = ['status' => 'success', 'msg' => 'Your Review Submit Successfully!'];
            echo json_encode($success);
            exit();
        }
    }
    public function sendresume(Request $request) {
        // post data
        // resume upload on resume folder
        $resume = $request->name . '.' . $request->resume->getClientOriginalExtension();
        $request->resume->move(public_path('/resume'), $resume);
        $name = $request->name;
        $subject = $request->subject;
        $email = $request->email;
        $mobile = $request->mobile;
        $resumeT = $request->resume;
        $position = $request->position;
        $resumeData = new Resume;
        $resumeData->name = $request->name;
        $resumeData->subject = $request->subject;
        $resumeData->email = $request->email;
        $resumeData->mobile = $request->mobile;
        $resumeData->resume = $resume;
        $resumeData->position = $request->position;
        $resumeData->save();
        // send mail with resume /cv attach
        $data = array("name" => $name, 'email' => $email, "subject" => $subject, 'mobile' => $mobile, 'resume' => $resume, 'position' => $position);
        $mail = Mail::send('email.resumemail', ['data' => $data], function ($m) use ($data) {
            $file = public_path('resume/' . $data['resume']);
            $m->from($data['email'], $data['name']);
            $m->to('info@saiomscg.com')->subject('Resume/cv for Job!');
            $m->attach($file);
        });
        $data = array("name" => $name, 'email' => $email, 'position' => $position, "subject" => $subject);
        $respondmail = Mail::send('email.returnmail', ['data' => $data], function ($m) use ($data) {
            $m->to($data['email'], $data['name']);
            $m->from('info@saiomscg.com')->subject('Response message !');
        });
        if ($respondmail) {
            $data = ['status' => 'success', 'msg' => 'Your Resume/cv upload successfully'];
            echo json_encode($data);
            exit();
        }
    }
    public function login() {
        return view('admin.login');
    }
    public function dashboard() {
        return view('dashboard');
    }
    public function sendEnquiry(Request $request) {
     
       $name   = $request->name;
       $email  = $request->email;
       $mobile = $request->mobile;
       $subject= $request->subject;
       $message= $request->message;
       $contectData1  = new ContectData;
       $contectData1->name  = $request->name;
       $contectData1->email = $request->email;
       $contectData1->mobile=$request->mobile;
       $contectData1->subject= $request->subject;
       $contectData1->message= $request->message;
       $contectData1->save();
       
        // $data = array("name" => $name, 'email' => $email, "subject" => $subject, 'msg' => $message);
        // $mail = Mail::send('email.sendEnquiry',['data' => $data] , function ($m) use ($data) {
        //            $m->from($data['email'], $data['name']);
        //            $m->to('info@saiomscg.com')->subject('New Enquiry !');
        //    });
        /*$data = ['msg' => 'OK'];
         echo json_encode($data);*/
    }
}
