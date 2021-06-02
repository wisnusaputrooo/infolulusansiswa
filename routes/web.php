<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', function(){

    $value = config('comingsoon');
    // if($value['snw_test_mode']){
        $countdownDates = Carbon::parse($value['snw_year']."-".$value['snw_month']."-".$value['snw_day']." ".$value['snw_hours'].":".$value['snw_minutes'].":".$value['snw_seconds']);
        $toDay = Carbon::now()->format('y-m-d H:i:s');
        $toDay = Carbon::parse($toDay);
        // $toDay = Carbon::parse("2021-06-03 16:00:01");
        $diff = $countdownDates->floatDiffInSeconds($toDay, false);
    
        if ($diff<0) {
            return view('layouts.countdown');
        }
        else
        {
            return redirect('login');
        }    
    // }
    // else
    // {
    //     return redirect('login');
    // }

    // Route::get('/', function(){
    //     return view('welcome');
    // });
});


Route::get('login', 'InfolulusController@index')->name('login');
Route::post('authentication', 'AuthController@login');
Route::get('info-lulusan/{id}', 'InfolulusController@allData');


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('home', 'InfolulusController@home');
    Route::get('update-data', 'InfolulusController@updateData');
    Route::get('data-sosmed', 'InfolulusController@dataSosmed');
    Route::get('document', 'InfolulusController@document');
    Route::get('logout', 'AuthController@logout');
 
});

Route::get('hashing/{pass}', function($pass){
    $hash_password_saya = Hash::make($pass);
    echo $hash_password_saya;
});