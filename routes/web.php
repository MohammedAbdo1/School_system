<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\HomeController;



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



Auth::routes();
Route::group(['middleware'=>['guest']],function(){
    
	Route::get('/', function()
		{
		return view('auth.login');	
		});
	});


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
], function(){
	// Route::get('/', function()
	//{
       // return view('dashboard');	});


    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

    Route::resource('Grades',\App\Http\Controllers\GradeController::class);
	Route::resource('Classrooms',\App\Http\Controllers\ClassroomController::class);
	Route::post('delete_all', [ClassroomController::class,'delete_all'])->name('delete_all');
	Route::post('Filter_Classes', [ClassroomController::class,'Filter_Classes'])->name('Filter_Classes');
	Route::resource('Sections',\App\Http\Controllers\SectionController::class);

	 Route::get('/classes/{id}',[SectionController::class,'getclasses'])->name('classes');
	


	Route::get('test',function(){
		return view('test_pag');

	});




});



