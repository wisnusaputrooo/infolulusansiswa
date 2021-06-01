<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Http\Requests\UpdateDataRequest;

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
            return view('infolulusan.login');
            }    
        }
        else
        {
            if (Auth::check()) {
                return redirect('home');
            }
            else {
                return view('infolulusan.login');
            }
        }
    
    }

    public function home()
    {   
        if (!Auth::check()) {
            return redirect('login');
        }

        $loginStory = User::find(Auth::id());
        if ($loginStory->nomor_telepon == null && $loginStory->acc_facebook == null && $loginStory->acc_instagram == null && $loginStory->acc_twitter == null) {
            return view('infolulusan.sosmedPage',compact('loginStory'));
        }
        else {
            return redirect('document');
        }

    }

    public function dataSosmed()
    {
        $loginStory = User::find(Auth::id());
        return view('infolulusan.sosmedPage',compact('loginStory'));
    }

    public function updateData(UpdateDataRequest $request)
    {
        $loginStory = User::find(Auth::id());
        if ($request) {
            $nomor_telepon = $request->input('nomor_telepon');
            $acc_instagram = $request->input('acc_instagram');
            $acc_facebook = $request->input('acc_facebook');
            $acc_twitter = $request->input('acc_twitter');
            try {
                $loginStory->nomor_telepon = $nomor_telepon;
                $loginStory->acc_instagram = $acc_instagram;
                $loginStory->acc_facebook = $acc_facebook;
                $loginStory->acc_twitter = $acc_twitter;
                $loginStory->save();
                return redirect('home')->with('success', 'Data berhasil di Simpan');
            } catch (\Exception $e) {
                // dd($e->errorInfo);
                // dd(\Str::contains($e->message(), 'acc_instagram'));
                $e = $e->errorInfo;
                if (\Str::contains($e[2], 'nomor_telepon')) {
                    $err[] = 'Nomor Telepon Sudah di-input oleh siswa lain';
                }
                if (\Str::contains($e[2], 'acc_instagram')) {
                    $err[] = 'Akun Instagram anda Sudah di-input oleh siswa lain';
                }
                if (\Str::contains($e[2], 'acc_facebook')) {
                    $err[] = 'Link Facebook anda Sudah di-input oleh siswa lain';
                }
                if (\Str::contains($e[2], 'acc_twitter')) {
                    $err[] = 'Akun Twitter anda Sudah di-input oleh siswa lain';
                }                
                return redirect()->back()->withInput()->with('error-query',$err);
            }
        }

    }

    public function document()
    {
        $loginStory = User::find(Auth::id());
        if ($loginStory->nomor_telepon == null && $loginStory->acc_facebook == null && $loginStory->acc_instagram == null && $loginStory->acc_twitter == null) {
            return redirect('home');
        }
        else {
            return view('infolulusan.dokumen',compact('loginStory'));
        }

    }
}
