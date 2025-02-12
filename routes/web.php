<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;

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
// Route::get('graphic_design_service',[Basecontroller::class,'graphic_design']);
// Route::get('digital_marketing_services',[Basecontroller::class,'digital_marketing']);
// Route::get('Mobile_app_development',[Basecontroller::class,'mobile_app']); 
// Route::get('ui_and_ux_excellence',[Basecontroller::class,'ux_excellence']);
// Route::get('digital_transformation',[Basecontroller::class,'digital_transformation']);
Route::get('contact_us',[Basecontroller::class,'contact']);
Route::post('contact',[Basecontroller::class,'contactmail']);
Route::get('terms_and_condition',[Basecontroller::class,'term']);
Route::get('privacy_and_policy',[Basecontroller::class,'privacy']);
Route::get('support_maintenance_services',[Basecontroller::class,'support_mainten']);
Route::post('newsletter_subscribe',[Basecontroller::class,'newsletter_subscribe']);

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');   
Route::get('{link}', [ServiceController::class,'show'])->name('service.show');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');   





Route::match(['get', 'post'], '/admin/login', [AdminController::class, 'index']);
Route::match(['get', 'post'], '/admin/registration', [AdminController::class, 'registration']);
Route::match(['get', 'post'], '/admin/login-check', [AdminController::class, 'login'])->name('login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/admin/forget-password',  [AdminController::class, 'forgetPassword'])->name('forgetPassword');



// Protected Routes (using middleware)
Route::middleware(['admin.auth'])->prefix('admin')->namespace('App\Http\Controllers\admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('profile', 'AdminController@profile')->name('admin.profile');
    Route::post('edit-profile', 'AdminController@editProfile')->name('admin.editProfile');
    Route::post('update-password', 'AdminController@editPassword')->name('admin.updatePassword');
    Route::get('header-list', 'HeaderController@index')->name('header-list');
    Route::match(['get', 'post'], 'add-edit-header', 'HeaderController@addEditHeader')->name('add-edit-header');
    Route::match(['get', 'post'], 'header-store', 'HeaderController@store')->name('admin.header.store');
    Route::delete('/header-delete/{id}', 'HeaderController@delete')->name('header.delete');
    Route::match(['get', 'post'], '/header-update/{id}', 'HeaderController@update')->name('header.update');



    Route::get('banner-list', 'BannerController@index')->name('banner-list');
    Route::match(['get', 'post'], 'add-edit-banner', 'BannerController@addEditBanner')->name('add-edit-banner');
    Route::match(['get', 'post'], 'banner-store', 'BannerController@store')->name('banner.store');
    Route::match(['get', 'post'], '/banner-update/{id}', 'BannerController@update')->name('banner.update');
    Route::delete('/banner-delete/{id}', 'BannerController@delete')->name('banner.delete');
    Route::match(['get', 'post'],'/update-banner-status/{id}', 'BannerController@updateStatus')->name('banner.update-status');




    Route::get('social-link-list', 'SocialLinkController@index')->name('social-link-list');
    Route::get('add-edit-social', 'SocialLinkController@add')->name('add-edit-social');
    Route::match(['get', 'post'], 'social-store', 'SocialLinkController@store')->name('admin.social.store');
    Route::match(['get', 'post'], 'social-update/{id}', 'SocialLinkController@update')->name('socialLink.update');
    Route::delete('/social-delete/{id}', 'SocialLinkController@delete')->name('social.delete');
    Route::post('social-status-update/{id}',  'SocialLinkController@statusUpdate')->name('social.statusUpdate');




    Route::get('feedback-list', 'FeedbackController@index')->name('feedback-list');
    Route::match(['get', 'post'], 'add-edit-feedback', 'FeedbackController@addEditFeedback')->name('add-edit-feedback');
    Route::match(['get', 'post'], 'feekback-store', 'FeedbackController@store')->name('admin.feekback.store');


    Route::get('client-list', 'ClientController@index')->name('client-list');
    Route::match(['get', 'post'], 'add-edit-client', 'ClientController@addEditClient')->name('add-edit-client');
    Route::match(['get', 'post'], 'client-store', 'ClientController@store')->name('client.store');
    Route::match(['get', 'post'], 'client-update/{id}', 'ClientController@update')->name('client.update');
    Route::delete('client-delete/{id}', 'ClientController@delete')->name('client.delete');



    Route::get('blog-list', 'BlogController@index')->name('blog-list');
    Route::match(['get', 'post'], 'add-edit-blog', 'BlogController@addEditBlog')->name('add-edit-blog');
    Route::match(['get', 'post'], 'blog-store', 'BlogController@blogStore');
    Route::match(['get', 'post'], '/blog-edit/{id}', 'BlogController@edit')->name('blog.edit');
    Route::match(['get', 'post'], '/blog-update/{id}', 'BlogController@update')->name('blog.update');
    Route::delete('/blog-delete/{id}', 'BlogController@delete')->name('blog.delete');





    Route::get('technology-list', 'TechnologyController@index')->name('technology-list');
    Route::match(['get', 'post'], 'add-edit-technology', 'TechnologyController@addEditTechnology')->name('add-edit-technology');
    Route::match(['get', 'post'], 'technology-store', 'TechnologyController@store')->name('technology.store');
    Route::match(['get', 'post'], '/technology-update/{id}', 'TechnologyController@update')->name('technology.update');
    Route::delete('/technology-delete/{id}', 'TechnologyController@delete')->name('technology.delete');



    Route::get('branch-list', 'BranchController@index')->name('branch-list');
    Route::match(['get', 'post'], 'add-edit-branch', 'BranchController@addEditBranch')->name('add-edit-branch');

    Route::get('service-list', 'ServiceController@index')->name('service-list');
    Route::match(['get', 'post'], 'add-edit-service', 'ServiceController@addEditService')->name('add-edit-service');
    Route::match(['get', 'post'], 'service-store', 'ServiceController@store');
    Route::match(['get', 'post'], '/service-update/{id}', 'ServiceController@update')->name('service.update');
    Route::delete('/service-delete/{id}', 'ServiceController@delete')->name('service.delete');



    Route::get('industry-list', 'IndustryController@index')->name('industry-list');
    Route::match(['get', 'post'], 'add-edit-industry', 'IndustryController@addEditIndustry')->name('add-edit-industry');

    Route::get('certificate-list', 'CertificateController@index')->name('certificate-list');
    Route::match(['get', 'post'], 'add-edit-certificate', 'CertificateController@addEditCertificate')->name('add-edit-certificate');
    Route::match(['get', 'post'], 'certificate-store', 'CertificateController@store')->name('certificate.store');
    Route::match(['get', 'post'], 'certificate-update/{id}', 'CertificateController@update')->name('certificate.update');
    Route::delete('certificate-delete/{id}', 'CertificateController@delete')->name('certificate.delete');


    Route::get('case-study-list', 'CaseController@index')->name('case-study-list');
    Route::match(['get', 'post'], 'add-edit-case-study', 'CaseController@addEditCaseStudy')->name('add-edit-case-study');
});
