<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
//use App\Http\Controllers\Admin\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route:: get('/',[Basecontroller::class,'index']);
Route:: get('home',[Basecontroller::class,'index']);
Route:: get('about',[Basecontroller::class,'about']);
Route:: get('service',[Basecontroller::class,'service']);
Route:: get('portfolio',[Basecontroller::class,'portfolio']);
Route::get('spark_business', [Basecontroller::class, 'spark_business_technology_service']);
Route::get('graphic_design_service',[Basecontroller::class,'graphic_design']);
Route::get('digital_marketing_services',[Basecontroller::class,'digital_marketing']);
Route::get('Mobile_app_development',[Basecontroller::class,'mobile_app']); 
Route::get('ui_and_ux_excellence',[Basecontroller::class,'ux_excellence']);
Route::get('digital_transformation',[Basecontroller::class,'digital_transformation']);
Route::get('contact_us',[Basecontroller::class,'contact']);
Route::post('contact',[Basecontroller::class,'contactmail']);
Route::get('terms_and_condition',[Basecontroller::class,'term']);
Route::get('privacy_and_policy',[Basecontroller::class,'privacy']);
Route::get('support_maintenance_services',[Basecontroller::class,'support_mainten']);
Route::post('newsletter_subscribe',[Basecontroller::class,'newsletter_subscribe']);



Route::prefix('/admin')->namespace('App\Http\Controllers\admin')->group(function () {
    Route::match(['get', 'post'], 'login', 'AdminController@index');
    Route::match(['get', 'post'], 'login-check', 'AdminController@login')->name('login');


    


    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    Route::get('header-list', 'HeaderController@index')->name('header-list');
    Route::match(['get', 'post'], 'add-edit-header', 'HeaderController@addEditHeader')->name('add-edit-header'); 
    Route::match(['get', 'post'], 'header-store', 'HeaderController@store')->name('admin.header.store');

    Route::get('banner-list', 'BannerController@index')->name('banner-list');
    Route::match(['get', 'post'], 'add-edit-banner', 'BannerController@addEditBanner')->name('add-edit-banner');

    Route::get('social-link-list', 'SocialLinkController@index')->name('social-link-list');

    Route::get('feedback-list', 'FeedbackController@index')->name('feedback-list');
    Route::match(['get', 'post'], 'add-edit-feedback', 'FeedbackController@addEditFeedback')->name('add-edit-feedback');

    Route::get('client-list', 'ClientController@index')->name('client-list');
    Route::match(['get', 'post'], 'add-edit-client', 'ClientController@addEditClient')->name('add-edit-client');

    Route::get('blog-list', 'BlogController@index')->name('blog-list');
    Route::match(['get', 'post'], 'add-edit-blog', 'BlogController@addEditBlog')->name('add-edit-blog');

    Route::get('technology-list', 'TechnologyController@index')->name('technology-list');
    Route::match(['get', 'post'], 'add-edit-technology', 'TechnologyController@addEditTechnology')->name('add-edit-technology');

    Route::get('branch-list', 'BranchController@index')->name('branch-list');
    Route::match(['get', 'post'], 'add-edit-branch', 'BranchController@addEditBranch')->name('add-edit-branch');

    Route::get('service-list', 'ServiceController@index')->name('service-list');
    Route::match(['get', 'post'], 'add-edit-service', 'ServiceController@addEditService')->name('add-edit-service');

    Route::get('industry-list', 'IndustryController@index')->name('industry-list');
    Route::match(['get', 'post'], 'add-edit-industry', 'IndustryController@addEditIndustry')->name('add-edit-industry');

    Route::get('certificate-list', 'CertificateController@index')->name('certificate-list');
    Route::match(['get', 'post'], 'add-edit-certificate', 'CertificateController@addEditCertificate')->name('add-edit-certificate');

    Route::get('case-study-list', 'CaseController@index')->name('case-study-list');
    Route::match(['get', 'post'], 'add-edit-case-study', 'CaseController@addEditCaseStudy')->name('add-edit-case-study');


});
