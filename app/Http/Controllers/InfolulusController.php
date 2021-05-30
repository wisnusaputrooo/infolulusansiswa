<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class InfolulusController extends Controller
{
    public function index()
    {
        $value = config('comingsoon');
        if($value['snw_test_mode']){
            $countdownDates = Carbon::parse($value['snw_year']."-".$value['snw_month']."-".$value['snw_day']." ".$value['snw_hours'].":".$value['snw_minutes'].":".$value['snw_seconds']);
            $toDay = Carbon::now()->format('y-m-d H:i:s');
            $toDay = Carbon::parse($toDay);
            // $toDay = Carbon::parse("2021-06-03 16:00:01");
            $diff = $countdownDates->floatDiffInSeconds($toDay, false);
        
            if ($diff<0) {
                return redirect('/');
            }
            else
            {
            return view('layouts.login');
            }    
        }
        else
        {
            if (Auth::check()) {
                return redirect('home');
            }
            else {
                return view('layouts.login');
            }
        }
    
    }

    public function home()
    {
        return view('layouts.pages');
    }
}
