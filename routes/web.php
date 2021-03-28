<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('about-me', 'App\Http\Controllers\HomeController@aboutMe')->name('about-me');
Route::get('case-studies', 'App\Http\Controllers\HomeController@caseStudies')->name('case-studies');
Route::get('case-studies/case-study-1', 'App\Http\Controllers\HomeController@caseStudy1')->name('case-study-1');
Route::get('articles', 'App\Http\Controllers\HomeController@getArticles')->name('articles');
Route::get('articles/papers-published-by-dr-s-n-khanna', 'App\Http\Controllers\HomeController@article1')->name('articles.papers-published-by-dr-s-n-khanna');
Route::get('articles/docs-revive-50-year-old-bypass-patient-dead-for-30-minutes', 'App\Http\Controllers\HomeController@article2')->name('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes');
Route::get('articles/cardiac-surgery-in-patients', 'App\Http\Controllers\HomeController@article3')->name('articles.cardiac-surgery-in-patients');
Route::get('gallery', 'App\Http\Controllers\HomeController@getGallery')->name('gallery');
Route::get('blog', 'App\Http\Controllers\HomeController@getBlog')->name('blog');
Route::get('contact-us', 'App\Http\Controllers\HomeController@contactUs')->name('contact-us');
Route::get('appointment', 'App\Http\Controllers\HomeController@getAppointment')->name('appointment');
