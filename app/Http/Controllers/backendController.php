<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\ClientReview;
use App\Models\Careers;
use App\Models\Services;
use App\Models\Resume;
use App\Models\ContectData;
use App\Models\AboutUs;
use DB;
use Hash;
use Illuminate\Support\Str;
class backendController extends Controller {
    public function indexCount() {
       
        $servicesCount = DB::table('services')->count();
        //print_r($servicesCount); die();
        return view('layouts.app',['servicesCo',$servicesCount]);
        
    }
    //////////////// services backend coode /////////
    public function services() {
        return view('backend.services');
    }
    public function serviceAjaxData() {
        $data = Services::all();
        return view('backend.ajaxDataTable.servicesData', ['servicesData' => $data]);
    }
    public function servicesDelete(Request $request) {
        $data = Services::find($request->id);
        $data->delete();
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'Services Delete Successfully!']);
        }
    }
    private function getEventSlug1($tipTitle) {
        $slug = Str::slug($tipTitle);
        $slugs = Services::whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'");
        if ($slugs->count() === 0) {
            return $slug;
        }
        $lastSlug = $slugs->orderBy('slug', 'desc')->first()->slug;
        // Strip the number off of the last slug, if any
        $lastSlugNumber = intval(str_replace($slug . '-', '', $lastSlug));
        // Increment/append the counter and return the slug we generated
        return $slug . '-' . ($lastSlugNumber + 1);
    }
    public function submitnewSerivecs(Request $request) {
        $slugtitle = $this->getEventSlug1($request->input('title'));
        $title = $request->title;
        $description = $request->description;
        $serviceSave = new Services;
        $serviceSave->title = $request->title;
        $serviceSave->description = $request->description;
        $serviceSave->slug = $slugtitle;
        $serviceSave->save();
        $success = ['status' => 'success', 'msg' => 'Your New Service Post Successfully!'];
        echo json_encode($success);
    }
    public function servicesStatus(Request $request) {
        $id = $request->input('id');
        $status = $request->input('status');
        if ($status == 1) {
            $update = Services::where('id', $id)->update(['status' => 2]);
        } else {
            $update = Services::where('id', $id)->update(['status' => 1]);
        }
        if ($update) {
            return response()->json(['status' => 'success', 'msg' => 'Service Status Change Successfully!']);
        }
    }
    public function upDateServices(Request $request) {
        $slugtitle = $this->getEventSlug1($request->input('title'));
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $upDateServicesdata = Services::find($request->id);
        $upDateServicesdata->title = $request->title;
        $upDateServicesdata->slug = $slugtitle;
        $upDateServicesdata->description = $request->description;
        $upDateServicesdata->save();
        $response = ['status' => 'success', 'msg' => ' Service Update Successfully!'];
        echo json_encode($response);
        //return redirect('admin-services');
        
    }
    public function addNewServicesPopup() {
        return view('backend.popup.addNewServices');
    }
    public function editServicesOpenPopu(Request $request) {
        $id = $request->id;
        $data = DB::table('services')->where('id', $id)->get();
        return view('backend.popup.editservices', ['servicesEditData' => $data]);
    }
    /////////////////////////////////// career  code ///////////
    public function careerjaxData() {
        $data = Careers::all();
        return view('backend.ajaxDataTable.careerDatatable', ['careerData' => $data]);
    }
    public function careerStatus(Request $request) {
        $id = $request->input('id');
        $status = $request->input('status');
        if ($status == 1) {
            $update = Careers::where('id', $id)->update(['status' => 2]);
        } else {
            $update = Careers::where('id', $id)->update(['status' => 1]);
        }
        if ($update) {
            return response()->json(['status' => 'success', 'msg' => 'Career Status Change Successfully!']);
        }
    }
    public function careerDelete(Request $request) {
        $data = Careers::find($request->id);
        $data->delete();
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'career Delete Successfully!']);
        }
    }
    public function addNewcareerPopup() {
        return view('backend.popup.addnewCareer');
    }
    public function submitNewCareer(Request $request) {
        $slugtitle = $this->getEventSlug1($request->input('job_post'));
        $job_post = $request->job_post;
        $location = $request->location;
        $description = $request->description;
        $serviceSave = new Careers;
        $serviceSave->job_post = $request->job_post;
        $serviceSave->location = $request->job_post;
        $serviceSave->description = $request->description;
        $serviceSave->slug = $slugtitle;
        $serviceSave->save();
        $success = ['status' => 'success', 'msg' => 'Your New Career Post Successfully!'];
        echo json_encode($success);
    }
    public function editcareerOpenPopu(Request $request) {
        $id = $request->id;
        $data = DB::table('careers')->where('id', $id)->get();
        return view('backend.popup.editCareer', ['careerdataF' => $data]);
    }
    public function updateCareers(Request $request) {
        $slugtitle = $this->getEventSlug1($request->input('job_post'));
        $id = $request->id;
        $job_post = $request->job_post;
        $location = $request->location;
        $description = $request->description;
        $careerUpdate = Careers::find($request->id);
        $careerUpdate->job_post = $request->job_post;
        $careerUpdate->location = $request->location;
        $careerUpdate->slug = $slugtitle;
        $careerUpdate->description = $request->description;
        $careerUpdate->save();
        $response = ['status' => 'success', 'msg' => ' Career Update Successfully!'];
        echo json_encode($response);
        //return redirect('admin-services');
        
    }
    public function careere() {
        $data = careers::all();
        return view('backend.careere', ['careerData' => $data]);
    }
    //////////// client Reviews back end code///////////////////////
    public function client_reviews() {
        $data = ClientReview::all();
        return view('backend.clienttell', ['reviews' => $data]);
    }
    public function client_reviewsData() {
                                                                           $data = ClientReview::all();
        return view('backend.ajaxDataTable.client_reviewsDataTable', ['clientrivewsD' => $data]);
    }
    public function client_R_Status(Request $request) {
        $id = $request->input('id');
        $status = $request->input('status');
        if ($status == 2) {
            $update = ClientReview::where('id', $id)->update(['status' => 1]);
        } else {
            $update = ClientReview::where('id', $id)->update(['status' => 2]);
        }
        if ($update) {
            return response()->json(['status' => 'success', 'msg' => 'Client Reviews Status Change Successfully!']);
        }
    }
    public function clientreviesDelete(Request $request) {
        $data = ClientReview::find($request->id);
        $data->delete();
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'Client Reviews Delete Successfully!']);
        }
    }
    public function addnewREviesByAdmin() {
        return view('backend.popup.add_new_reviews');
    }
    public function submitclient_reviesByadmin(Request $request) {
        $slugtitle = $this->getEventSlug1($request->input('name'));
        $name = $request->name;
        $designation = $request->designation;
        $description = $request->description;
        $reviewsByAdmn = new ClientReview;
        $reviewsByAdmn->name = $request->name;
        $reviewsByAdmn->designation = $request->designation;
        $reviewsByAdmn->description = $request->description;
        $reviewsByAdmn->slug = $slugtitle;
        $reviewsByAdmn->save();
        $success = ['status' => 'success', 'msg' => 'Your New Reviews Post Successfully!'];
        echo json_encode($success);
    }
    public function editclientreviesByAd(Request $request) {
        $id = $request->id;
        $data = DB::table('client_review')->where('id', $id)->get();
        return view('backend.popup.editclient_revies_byadmin', ['adminRevies' => $data]);
    }
    public function updateclientReviesByadmin(Request $request) {
        $slugtitle = $this->getEventSlug1($request->input('name'));
        $id = $request->id;
        $name = $request->name;
        $designation = $request->designation;
        $description = $request->description;
        $clientReAdmin = ClientReview::find($request->id);
        $clientReAdmin->name = $request->name;
        $clientReAdmin->designation = $request->designation;
        $clientReAdmin->slug = $slugtitle;
        $clientReAdmin->description = $request->description;
        $clientReAdmin->save();
        $response = ['status' => 'success', 'msg' => ' Client Reviews Update Successfully!'];
        echo json_encode($response);
        //return redirect('admin-services');
        
    }
    ////////////////////////////// resume data load ////////
    public function resumedataTbale() {
        $data = Resume::all();
        return view('backend.ajaxDataTable.resumedataTable', ['resumM' => $data]);
    }
    public function resumeStatus(Request $request) {
        $id = $request->input('id');
        $status = $request->input('status');
        if ($status == 1) {
            $update = Resume::where('id', $id)->update(['status' => 2]);
        } else {
            $update = Resume::where('id', $id)->update(['status' => 1]);
        }
        if ($update) {
            return response()->json(['status' => 'success', 'msg' => 'Candidate Resume/cv Status Change Successfully!']);
        }
    }
    public function resume_cvList() {
        $data = Resume::all();
        return view('backend.contectus');
    }
    public function delete_resume(Request $request) {
        $data = Resume::find($request->id);
        $data->delete();
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'Candidate resume/cv Delete Successfully!']);
        }
    }
    ///////////////////// cloge resume/cv section code/////////
    public function contact_data() {
        return view('backend.contect_data');
    }
    public function deletereview(Request $request) {
        $data = ClientReview::find($request->id);
        $data->delete();
        return redirect('client-tell');
    }

    //////////////////////////  abouts us ////////////////////

public function aboutUsFunc()
{
    return view('backend.about_us');
}
   public function aboutAjaxdataTable() {
         $data = AboutUs::all();
        return view('backend.ajaxDataTable.aboutUsDatatable',['aboutData' => $data]);
 }
    public function aboutUsStatus(Request $request) {
      
        $id = $request->input('id');
        $status = $request->input('status');
        if ($status == 1) {
            $update = AboutUs::where('id', $id)->update(['status' => 2]);
            return response()->json(['status' => 'success', 'msg' => 'About Us Status Change Successfully!']);
        } else {
            $update = AboutUs::where('id', $id)->update(['status' => 1]);
        }
        if ($update) {
            return response()->json(['status' => 'success', 'msg' => 'About Us Status Change Successfully!']);
        }
    }
       public function aboutUsDelete(Request $request) {
        $data = AboutUs::find($request->id);
        $data->delete();
        if ($data) {
            return response()->json(['status' => 'success', 'msg' => 'This About Us Delete Successfully!']);
        }
    } 
      public function addNewaboutUs() {
        return view('backend.popup.addnewAboutUsForm');
    } 

public function submitAboutUs(Request $request) {
          
           
    $imagesName = $request->title . '.' . $request->images->getClientOriginalExtension();
      $request->images->move(public_path('/aboutUsIamges'), $imagesName);
       
        $slugtitle = $this->getEventSlug1($request->input('title'));
        $title = $request->title;
        $images = $request->images;
        $description = $request->description;

        $aboutUsData = new AboutUs;

        $aboutUsData->title = $request->title;
        $aboutUsData->images = $imagesName;
        $aboutUsData->description = $request->description;
        $aboutUsData->slug = $slugtitle;
        $aboutUsData->save();
        $success = ['status' => 'success', 'msg' => 'Your New About Us Post Successfully!'];
        echo json_encode($success);
      
    }
    public function editAboutUsFOpenPopu(Request $request) {
        $id = $request->id;
        $data = DB::table('aboutus')->where('id', $id)->get();
        return view('backend.popup.editaboutuspopup', ['aboutShow' => $data]);
    }

     public function updateAboutUsData(Request $request) {
 
    if ($request->images) {
       $imagesName = $request->title . '.' . $request->images->getClientOriginalExtension();
        $request->images->move(public_path('/aboutUsIamges'), $imagesName);
    }
    
       
        $slugtitle = $this->getEventSlug1($request->input('title'));
        $hiddenimages = $request->hiddenimages;
        $title = $request->title;
        $images = $request->images;
        $description = $request->description;

        $upAbout = AboutUs::find($request->id);
        $upAbout->title = $request->title;
        if ($images != '') {

             $upAbout->images = $request->images;
        }else{
                
             $upAbout->images = $request->hiddenimages;
        }

        $upAbout->description = $request->description;
        $upAbout->slug = $slugtitle;
        $upAbout->save();
        $success = ['status' => 'success', 'msg' => 'Your About Us Update Successfully!'];
        echo json_encode($success);
         return redirect('admin-about');
    }
}

