<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\backendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 ////////////////Front End Routes //////////////////////////////////////

Route::get('/', function () {
    return view('index');
});

Route::get('/count-data', [backendController::class, 'indexCount'])->name('indexCount');



Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');

Route::get('/services-details/{id}', [FrontendController::class, 'servicesDetails'])->name('servicesDetails');

Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/career', [FrontendController::class, 'career'])->name('career');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/review', [FrontendController::class, 'review'])->name('review');
Route::get('/apply', [FrontendController::class, 'apply'])->name('apply');
Route::post('/send-resume', [FrontendController::class, 'sendresume'])->name('sendresume');
Route::post('/review-submit', [FrontendController::class, 'submitreview'])->name('review-submit');
Route::post('/send-enquiry', [FrontendController::class, 'sendEnquiry'])->name('sendEnquiry');


       ///////////////////////////Back End Routes//////////////////////

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin-career', [backendController::class, 'careere'])->name('careere');
Route::get('/admin-resume', [backendController::class, 'resume_cvList'])->name('resume_cvList');
Route::get('/admin-client-review', [backendController::class, 'client_reviews'])->name('client_reviews');
Route::get('/admin-contect', [backendController::class, 'contact_data'])->name('contact_data');
Route::get('/delete-review/{id}', [backendController::class, 'deletereview'])->name('deletereview');

////////////////// back end services Route////////////////////////////

Route::get('/admin-services', [backendController::class, 'services'])->name('services');
Route::get('/admin-services-data', [backendController::class, 'serviceAjaxData'])->name('serviceAjaxData');
Route::post('/admin-services-delete', [backendController::class, 'servicesDelete'])->name('servicesDelete');
Route::post('/admin-services-status', [backendController::class, 'servicesStatus'])->name('servicesStatus');
Route::get('/add-new-services', [backendController::class, 'addNewServicesPopup'])->name('addNewServicesPopup');
Route::post('/submit-new-services', [backendController::class, 'submitnewSerivecs'])->name('submitnewSerivecs');
Route::get('/edit-services', [backendController::class, 'editServicesOpenPopu'])->name('editServicesOpenPopu');
Route::post('/update-services', [backendController::class, 'upDateServices'])->name('upDateServices');

////////////////////// back end career route/////////////////////////////
Route::get('/admin-career-data', [backendController::class, 'careerjaxData'])->name('careerjaxData');
Route::post('/admin-career-status', [backendController::class, 'careerStatus'])->name('servicesStatus');
Route::post('/admin-career-delete', [backendController::class, 'careerDelete'])->name('careerDelete');
Route::get('/add-new-career', [backendController::class, 'addNewcareerPopup'])->name('addNewcareerPopup');
Route::post('/submit-new-career', [backendController::class, 'submitNewCareer'])->name('submitNewCareer');
Route::get('/edit-career', [backendController::class, 'editcareerOpenPopu'])->name('editcareerOpenPopu');
Route::post('/update-career', [backendController::class, 'updateCareers'])->name('updateCareers');

//////////////////// back end client Reviews route //////////////

Route::get('/admin-client-data', [backendController::class, 'client_reviewsData'])->name('client_reviewsData');
Route::post('/admin-client-status', [backendController::class, 'client_R_Status'])->name('client_R_Status');
Route::post('/admin-client-delete', [backendController::class, 'clientreviesDelete'])->name('clientreviesDelete');
Route::get('/add-new-client', [backendController::class, 'addnewREviesByAdmin'])->name('addnewREviesByAdmin');
Route::post('/submit-new-client-reviews', [backendController::class, 'submitclient_reviesByadmin'])->name('submitclient_reviesByadmin');
Route::get('/edit-client-reviews', [backendController::class, 'editclientreviesByAd'])->name('editclientreviesByAd');
Route::post('/update-client-revies-admin', [backendController::class, 'updateclientReviesByadmin'])->name('updateclientReviesByadmin');

/////////////////  resume/cv  route //////////
Route::get('/admin-resume-data', [backendController::class, 'resumedataTbale'])->name('resumedataTbale');
Route::post('/admin-resume-status', [backendController::class, 'resumeStatus'])->name('resumeStatus');
Route::post('/admin-resume-delete', [backendController::class, 'delete_resume'])->name('delete_resume');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


///////////////////////////// about us  routes //////////////////////////

Route::get('/admin-about', [backendController::class, 'aboutUsFunc'])->name('aboutUsFunc');
Route::get('/admin-about-us', [backendController::class, 'aboutAjaxdataTable'])->name('aboutAjaxdataTable');
Route::post('/admin-about-status', [backendController::class, 'aboutUsStatus'])->name('aboutUsStatus');
Route::post('/admin-about-delete', [backendController::class, 'aboutUsDelete'])->name('aboutUsDelete');
Route::get('/add-new-about-us', [backendController::class, 'addNewaboutUs'])->name('addNewaboutUs');
Route::post('/submit-new-about-us', [backendController::class, 'submitAboutUs'])->name('submitAboutUs');
Route::get('/edit-about-us', [backendController::class, 'editAboutUsFOpenPopu'])->name('editAboutUsFOpenPopu');
Route::post('/update-about-us', [backendController::class, 'updateAboutUsData'])->name('updateAboutUsData');