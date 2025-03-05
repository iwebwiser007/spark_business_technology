<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
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
Route::get('/', [Basecontroller::class, 'index']);
Route::get('home', [Basecontroller::class, 'index']);
Route::get('about', [Basecontroller::class, 'about']);
Route::get('service', [Basecontroller::class, 'service']);
Route::get('portfolio', [PortfolioController::class, 'portfolio']);
Route::get('spark_business', [Basecontroller::class, 'spark_business_technology_service']);
// Route::get('graphic_design_service',[Basecontroller::class,'graphic_design']);
// Route::get('digital_marketing_services',[Basecontroller::class,'digital_marketing']);
// Route::get('Mobile_app_development',[Basecontroller::class,'mobile_app']); 
// Route::get('ui_and_ux_excellence',[Basecontroller::class,'ux_excellence']);
// Route::get('digital_transformation',[Basecontroller::class,'digital_transformation']);
Route::get('contact_us', [Basecontroller::class, 'contact']);
Route::post('contact', [Basecontroller::class, 'contactmail']);
Route::get('terms_and_condition', [Basecontroller::class, 'term']);
Route::get('privacy_and_policy', [Basecontroller::class, 'privacy']);
Route::get('support_maintenance_services', [Basecontroller::class, 'support_mainten']);
Route::post('newsletter_subscribe', [Basecontroller::class, 'newsletter_subscribe']);

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('{link}', [ServiceController::class, 'show'])->name('service.show');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('portfolio/{slug}',[PortfolioController::class, 'detail'])->name('admin.portfolioDetail');


Route::match(['get', 'post'], '/admin/registration', [AdminController::class, 'registration']);
Route::match(['get', 'post'], '/admin/login', [AdminController::class, 'login'])->name('login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/admin/forget-password',  [AdminController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/admin/new-password',  [AdminController::class, 'newPassword'])->name('newPassword');

Route::middleware(['admin.auth'])->prefix('admin')->namespace('App\Http\Controllers\admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('profile', 'AdminController@profile')->name('admin.profile');
    Route::post('edit-profile', 'AdminController@editProfile')->name('admin.editProfile');
    Route::post('update-password', 'AdminController@editPassword')->name('admin.updatePassword');

    Route::get('header-list', 'HeaderController@index')->name('admin.headerList');
    Route::match(['get', 'post'], 'add-header', 'HeaderController@add')->name('admin.headerAdd');
    Route::match(['get', 'post'], 'header-store', 'HeaderController@store')->name('admin.headerStore');
    Route::match(['get', 'post'], '/header-update/{id}', 'HeaderController@update')->name('admin.headerUpdate');
    Route::delete('/header-delete/{id}', 'HeaderController@delete')->name('admin.headerDelete');
    Route::get('header-search', 'HeaderController@search')->name('admin.headerSearch');


    Route::get('banner-list', 'BannerController@index')->name('admin.bannerList');
    Route::match(['get', 'post'], 'add-banner', 'BannerController@add')->name('admin.bannerAdd');
    Route::match(['get', 'post'], 'banner-store', 'BannerController@store')->name('admin.bannerStore');
    Route::match(['get', 'post'], '/banner-update/{id}', 'BannerController@update')->name('admin.bannerUpdate');
    Route::delete('/banner-delete/{id}', 'BannerController@delete')->name('admin.bannerDelete');
    Route::match(['get', 'post'], '/update-banner-status/{id}', 'BannerController@updateStatus')->name('admin.bannerUpdateStatus');

    Route::get('social-link-list', 'SocialLinkController@index')->name('admin.socialLinkList');
    Route::get('add-social-link', 'SocialLinkController@add')->name('admin.socialLinkAdd');
    Route::match(['get', 'post'], 'social-store', 'SocialLinkController@store')->name('admin.socialLinkStore');
    Route::match(['get', 'post'], 'social-update/{id}', 'SocialLinkController@update')->name('admin.socialLinkUpdate');
    Route::delete('/social-delete/{id}', 'SocialLinkController@delete')->name('admin.socialLinkDelete');
    Route::post('social-status-update/{id}',  'SocialLinkController@statusUpdate')->name('admin.socialLinkStatusUpdate');

    Route::get('feedback-list', 'FeedbackController@index')->name('admin.feedbackList');
    Route::match(['get', 'post'], 'add-feedback', 'FeedbackController@add')->name('admin.feedbackAdd');
    Route::match(['get', 'post'], 'feekback-store', 'FeedbackController@store')->name('admin.feekbackStore');
    Route::match(['get', 'post'], 'feedback-update/{id}', 'FeedbackController@update')->name('admin.feedbackUpdate');
    Route::delete('/feedback-delete/{id}', 'FeedbackController@delete')->name('admin.feedbackDelete');

    Route::get('client-list', 'ClientController@index')->name('admin.clientList');
    Route::match(['get', 'post'], 'add-client', 'ClientController@add')->name('admin.clientAdd');
    Route::match(['get', 'post'], 'client-store', 'ClientController@store')->name('admin.clientStore');
    Route::match(['get', 'post'], 'client-update/{id}', 'ClientController@update')->name('admin.clientUpdate');
    Route::delete('client-delete/{id}', 'ClientController@delete')->name('admin.clientDelete');

    Route::get('blog-list', 'BlogController@index')->name('admin.blogList');
    Route::match(['get', 'post'], 'add-blog', 'BlogController@add')->name('admin.blogAdd');
    Route::match(['get', 'post'], 'blog-store', 'BlogController@blogStore')->name('admin.blogStore');
    // Route::match(['get', 'post'], '/blog-edit/{id}', 'BlogController@edit')->name('admin.blogEdit');
    Route::match(['get', 'post'], '/blog-update/{id}', 'BlogController@update')->name('admin.blogUpdate');
    Route::delete('/blog-delete/{id}', 'BlogController@delete')->name('admin.blogDelete');

    Route::get('portfolio-list', 'PortfolioController@index')->name('admin.portfolioList');
    Route::match(['get', 'post'], 'add-portfolio', 'PortfolioController@add')->name('admin.portfolioAdd');
    Route::match(['get', 'post'], 'portfolio-store', 'PortfolioController@store')->name('admin.portfolioStore');
    Route::match(['get', 'post'], '/portfolio-update/{id}', 'PortfolioController@update')->name('admin.portfolioUpdate');
    Route::delete('/portfolio-delete/{id}', 'PortfolioController@delete')->name('admin.portfolioDelete');
    Route::match(['get', 'post'], '/update-portfolio-status/{id}', 'PortfolioController@updateStatus')->name('admin.portfolioUpdateStatus');




    Route::get('technology-list', 'TechnologyController@index')->name('admin.technologyList');
    Route::match(['get', 'post'], 'add-technology', 'TechnologyController@add')->name('admin.technologyAdd');
    Route::match(['get', 'post'], 'technology-store', 'TechnologyController@store')->name('admin.technologyStore');
    Route::match(['get', 'post'], '/technology-update/{id}', 'TechnologyController@update')->name('admin.technologyUpdate');
    Route::delete('/technology-delete/{id}', 'TechnologyController@delete')->name('admin.technologyDelete');

    Route::get('branch-list', 'BranchController@index')->name('admin.branchList');
    Route::match(['get', 'post'], 'add-branch', 'BranchController@add')->name('admin.branchAdd');
    Route::match(['get', 'post'], 'branch-store', 'BranchController@store')->name('admin.branchStore');
    Route::match(['get', 'post'], 'branch-update/{id}', 'BranchController@update')->name('admin.branchUpdate');
    Route::delete('branch-delete/{id}', 'BranchController@delete')->name('admin.branchDelete');

    Route::get('service-list', 'ServiceController@index')->name('admin.serviceList');
    Route::match(['get', 'post'], 'add-service', 'ServiceController@add')->name('admin.serviceAdd');
    Route::match(['get', 'post'], 'service-store', 'ServiceController@store')->name('admin.serviceStore');
    Route::match(['get', 'post'], '/service-update/{id}', 'ServiceController@update')->name('admin.serviceUpdate');
    Route::delete('/service-delete/{id}', 'ServiceController@delete')->name('admin.serviceDelete');
    Route::get('search-service', 'ServiceController@search')->name('admin.searchService');


    Route::get('industry-list', 'IndustryController@index')->name('admin.industryList');
    Route::match(['get', 'post'], 'add-industry', 'IndustryController@add')->name('admin.industryAdd');
    Route::match(['get', 'post'], 'industry-store', 'IndustryController@store')->name('admin.industryStore');
    Route::match(['get', 'post'], 'industry-update/{id}', 'IndustryController@update')->name('admin.industryUpdate');
    Route::delete('industry-delete/{id}', 'IndustryController@delete')->name('admin.industryDelete');

    Route::get('certificate-list', 'CertificateController@index')->name('admin.certificateList');
    Route::match(['get', 'post'], 'add-certificate', 'CertificateController@add')->name('admin.certificateAdd');
    Route::match(['get', 'post'], 'certificate-store', 'CertificateController@store')->name('admin.certificateStore');
    Route::match(['get', 'post'], 'certificate-update/{id}', 'CertificateController@update')->name('admin.certificateUpdate');
    Route::delete('certificate-delete/{id}', 'CertificateController@delete')->name('admin.certificateDelete');

    Route::get('case-study-list', 'CaseController@index')->name('case-study-list');
    Route::match(['get', 'post'], 'add-edit-case-study', 'CaseController@addEditCaseStudy')->name('add-edit-case-study');
    Route::match(['get', 'post'], 'case-study-show', 'CaseController@show')->name('admin.case-study.show');

    Route::match(['get', 'post'], 'logo', 'AdminController@logo')->name('admin.logo');
    Route::match(['get', 'post'], 'update-logo', 'AdminController@updateLogo')->name('admin.updateLogo');
    

});



