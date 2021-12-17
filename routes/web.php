<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.layouts.design');
// });
Route::get('/', 'Home\IndexController@index');

Route::get('/contact', 'Home\IndexController@contact');

//Courses Backend Route
Route::group(['middleware' => 'auth'], function () {
    Route::get('/courses', 'Home\IndexController@courses');
    Route::get('/admin/courses', 'Admin\CoursesController@index');
    Route::get('/admin/create-courses', 'Admin\CoursesController@create');
    Route::post('/admin/courses/store', 'Admin\CoursesController@store');
    Route::post('/admin/courses/delete/{id}', 'Admin\CoursesController@destroy');
    Route::get('/admin/courses/edit/{id}', 'Admin\CoursesController@edit');
    Route::post('/admin/courses/update/{id}', 'Admin\CoursesController@update');
});


//News Backend Route
Route::get('/admin/news', 'Admin\NewsController@index');
Route::get('/admin/create-news', 'Admin\NewsController@create');
Route::post('/admin/news/store', 'Admin\NewsController@store');
Route::get('/admin/news/edit/{id}', 'Admin\NewsController@edit');
Route::post('/admin/news/update/{id}', 'Admin\NewsController@update');
Route::post('/admin/news/delete/{id}', 'Admin\NewsController@destroy');


//Slider Backend Route
Route::get('/admin/slider', 'Admin\SliderController@index');
Route::get('/admin/create-slider', 'Admin\SliderController@create');
Route::post('/admin/slider/store', 'Admin\SliderController@store');
Route::post('/admin/slider/delete/{id}', 'Admin\SliderController@destroy');
Route::get('/admin/slider/edit/{id}', 'Admin\SliderController@edit');
Route::post('/admin/slider/update/{id}', 'Admin\SliderController@update');

//Staffs Backend Route
Route::get('/admin/staffs', 'Admin\StaffController@index');
Route::get('admin/add-staff', 'Admin\StaffController@create');
Route::post('admin/staff/store', 'Admin\StaffController@store');
Route::get('admin/staff/edit/{id}', 'Admin\StaffController@edit');
Route::post('admin/staff/update/{id}', 'Admin\StaffController@update');
Route::post('admin/staff/delete/{id}', 'Admin\StaffController@destroy');

//Facilities Backend Route
Route::get('/admin/facilities', 'Admin\FacilitiesController@index');
Route::get('admin/add-facility', 'Admin\FacilitiesController@create');
Route::post('admin/facility/store', 'Admin\FacilitiesController@store');
Route::get('admin/facility/edit/{id}', 'Admin\FacilitiesController@edit');
Route::post('admin/facility/delete/{id}', 'Admin\FacilitiesController@destroy');
Route::post('admin/facility/update/{id}', 'Admin\FacilitiesController@update');


//Testimonial Backend Route
Route::get('/admin/testimonials', 'Admin\TestimonialController@index');
Route::post('/admin/testimonial/store', 'Admin\TestimonialController@store');
Route::post('admin/testimonial/delete/{id}', 'Admin\TestimonialController@destroy');

//Sponsors Backend Route
Route::get('admin/sponsors', 'Admin\SponsorController@index');
Route::get('admin/create-sponsor', 'Admin\SponsorController@create');
Route::post('admin/sponsor/store', 'Admin\SponsorController@store');
Route::post('admin/sponsor/delete/{id}', 'Admin\SponsorController@destroy');
Route::get('admin/sponsor/edit/{id}', 'Admin\SponsorController@edit');
Route::post('admin/sponsor/update/{id}', 'Admin\SponsorController@update');

//Company Info Backend Route
Route::get('admin/companyinfo', 'Admin\CompanyInfoController@index');
Route::get('admin/add-companyinfo', 'Admin\CompanyInfoController@create');
Route::post('admin/companyinfo/store', 'Admin\CompanyInfoController@store');
Route::post('admin/companyinfo/update/{id}', 'Admin\CompanyInfoController@update');


Route::get('admin/pageinformation', 'Admin\PageInfoController@index');
Route::get('admin/pageinformation/edit/{id}', 'Admin\PageInfoController@edit');
Route::post('admin/pageinformation/update/{id}', 'Admin\PageInfoController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');