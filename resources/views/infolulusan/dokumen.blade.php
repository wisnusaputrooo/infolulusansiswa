@extends('layouts.pages')

@section('TitlePage', 'Lembar Pengumuman Kelulusan')

<?php $no_sk_sekolah = 'XXX/B2/SMK.H/VI/2021'?>

@section('pageContent')
                        <!-- Page content -->
                        <div class="container-fluid pt-8 page">
                            <div class="page-header mt-0 shadow p-3">
                                <ol class="breadcrumb mb-sm-0">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashoard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dokumen Pengumuman Kelulusan {{($loginStory->is_pass) ? '':'Dipending'}}</li>
                                </ol>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                @include('layouts.message-alert')
                                @if ($loginStory->is_pass)
                                <div class="card-box card shadow">
                                    <div class="card-body">
                                        <div class="mb-0">
                                            <div class="row">
                                                <div class="md-12">
                                                    <div class="profile-image">
                                                        <img class="images-responsive" src="/images/Header2.png" alt="">
                                                    </div>    
                                                </div>

                                                <div class="col-md-12 text-center">
                                                        <h1 class="ls-1 m-0"><strong>SURAT KETERANGAN KELULUSAN</strong></h1>
                                                        <h1 class="ls-1 m-0"><strong>SMK HARAPAN KARTASURA</strong></h1>
                                                        <h1 class="ls-1 m-0"><strong>TAHUN PELAJARAN 2020/2021</strong></h1>
                                                </div><!-- end col -->
                                                <div class="text-justify" style="margin-top:3rem; margin-left: 3rem; margin-right: 3rem">
                                                    <address>
                                                        <strong>
                                                            Berpedoman pada : <br>
                                                            Surat Edaran (SE) Menteri Pendidikan dan Kebudayaan Republik Indonesia <mark>Nomor : 1 Tahun 2021</mark>, Surat Edaran Kepala Dinas Pendidikan dan Kebudayaan Provinsi Jawa Tengah <mark>Nomor : 423.5/1824/V/2021</mark>, dan Surat Keputusan Kepala Sekolah SMK Harapan Kartasura <mark>Nomor : {{$no_sk_sekolah}}</mark>, memutuskan bahwa peserta didik tersebut dibawah ini : 
                                                        </strong>
                                                    </address>
                                                </div>

                                            </div>
                                            <!-- end row -->

                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table borderless m-t-30 text-nowrap mx-auto w-auto font-weight-bold">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Nama</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Tempat / Tanggal Lahir</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Jenis Kelamin</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Nomor Peserta</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Program Studi</h2>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{$loginStory->nama}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{$loginStory->tempat_lahir.", ".\Carbon\Carbon::parse($loginStory->tanggal_lahir)->translatedFormat('d F Y')}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{($loginStory->jenis_kelamin == 'P') ? 'Perempuan' : 'Laki - Laki'}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{$loginStory->nomor_peserta}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: <?php
                                                                        if ($loginStory->program_studi == 1) {
                                                                            echo 'Teknik Komputer dan Jaringan';
                                                                        }
                                                                        elseif ($loginStory->program_studi == 2) {
                                                                            echo 'Teknik Elektronika Industri';
                                                                        }
                                                                        else {
                                                                            echo 'Teknik Kendaraan Ringan';
                                                                        }
                                                                        ?></h2>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-12 mt-10">&nbsp;</div>
                                                    <div class="text-center">
                                                        <h2>Dinyatakan :</h2>
                                                        <h2 class="display-2"><strong>~ LULUS ~</strong> </h2>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 row">
                                                    <div class="md-4 ml-auto ls-1 m-0">
                                                        <table class="table borderless table-responsive float-right">
                                                            <tr>
                                                                <td class="text-right" width="10%" style="padding-left:23%"><h4 class="font-weight-600">Ditetapkan di</h4>
                                                                    <h4 class="font-weight-600">Tanggal</h4></td>
                                                                <td class="text-left" width="10%"><h4>: Kartasura</h4>
                                                                    <h4>: 03 Juni 2021</h4></td>
                                                            </tr>
                                                        </table>
                                                        <div class="profile-image">
                                                            <img class="images-responsive" src="/images/Penetapan Kelulusan.png" alt="">
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="text-justify" style="margin-top:3rem; margin-left: 3rem; margin-right: 3rem">                                                        <strong>NB. Surat keterangan ini mohon dicetak dan berlaku sebagai bukti untuk pengambilan nilai hasil
                                                        ujian sekolah dan SHUN sementara, dan diwajibkan menyertakan FotoCopy Akta Kelahiran.</strong>
                                                </div>
                                            </div>
                                            <div class="d-print-none">
                                                <div class="float-right">
                                                    <a href="javascript:window.print()" class="btn btn-primary"><i class="fa fa-print"></i> print</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @else
                                <div class="card-box card shadow">
                                    <div class="card-body">
                                        <div class="mb-0">
                                            <div class="row">
                                                <div class="md-12">
                                                    <div class="profile-image">
                                                        <img class="images-responsive" src="/images/Header2.png" alt="">
                                                    </div>    
                                                </div>

                                                <div class="col-md-12 text-center">
                                                        <h1 class="ls-1 m-0"><strong>SURAT KETERANGAN KELULUSAN</strong></h1>
                                                        <h1 class="ls-1 m-0"><strong>SMK HARAPAN KARTASURA</strong></h1>
                                                        <h1 class="ls-1 m-0"><strong>TAHUN PELAJARAN 2020/2021</strong></h1>
                                                </div><!-- end col -->
                                                <div class="text-justify" style="margin-top:3rem; margin-left: 3rem; margin-right: 3rem">
                                                    <address>
                                                        <strong>
                                                            Berpedoman pada : <br>
                                                            Surat Keputusan Kepala Sekolah SMK Harapan Kartasura Nomor : {{$no_sk_sekolah}}, memutuskan bahwa peserta didik tersebut dibawah ini : 
                                                        </strong>
                                                    </address>
                                                </div>

                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table borderless m-t-30 text-nowrap mx-auto w-auto font-weight-bold">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Nama</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Tempat / Tanggal Lahir</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Jenis Kelamin</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Nomor Peserta</h2>
                                                                        <h2 class="ls-1 m-0 font-weight-600">Program Studi</h2>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{$loginStory->nama}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{$loginStory->tempat_lahir.", ".\Carbon\Carbon::parse($loginStory->tanggal_lahir)->translatedFormat('d F Y')}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{($loginStory->jenis_kelamin == 'P') ? 'Perempuan' : 'Laki - Laki'}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: {{$loginStory->nomor_peserta}}</h2>
                                                                        <h2 class=" ls-1 m-0 font-weight-600 pl-2">: <?php
                                                                        if ($loginStory->program_studi == 1) {
                                                                            echo 'Teknik Komputer dan Jaringan';
                                                                        }
                                                                        elseif ($loginStory->program_studi == 2) {
                                                                            echo 'Teknik Elektronika Industri';
                                                                        }
                                                                        else {
                                                                            echo 'Teknik Kendaraan Ringan';
                                                                        }
                                                                        ?></h2>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="text-center">
                                                        <p class="lh-100 display-4">
                                                            Menyatakan : <br>
                                                            <strong>~ Kelulusan Dipending ~</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card shadow mb-0">
                                                <div class="card-body ">
													<div class="tab-content">
														<div class="tab-pane fade show active" aria-labelledby="home-tab">
															<p class="description">Kelulusan anda dipending karena menyangkut beberapa hal, diantaranya :</p>
															<p class="description mb-0">
                                                                <ul>
                                                                    <li>Anda belum menyelesaikan seluruh ujian maupun remidiasi</li>
                                                                    <li>Nilai anda belum memenuhi kriteria kompetensi kelulusan</li>
                                                                    <li>Permasalahan administrasi baik buku perpustakaan yang belum dikembalikan, atau yang lainnya</li>
                                                                </ul>
                                                            </p>
                                                            <p class="description">
                                                                Untuk Informasi lebih lanjut silahkan datang kesekolah menemui <mark><strong> Bapak Slamet Sutrisno, S.E</strong></mark> dengan berpakaian rapi dan sopan.
                                                            </p>
                                                            <strong>NB. Surat keterangan ini mohon dicetak dan disampaikan kepada Guru yang berwenang.</strong>
														</div>
													</div>
												</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 row">
                                                    <div class="md-4 ml-auto ls-1 m-0">
                                                        <table class="table borderless table-responsive float-right">
                                                            <tr>
                                                                <td class="text-right" width="10%" style="padding-left:23%"><h4 class="font-weight-600">Ditetapkan di</h4>
                                                                    <h4 class="font-weight-600">Tanggal</h4></td>
                                                                <td class="text-left" width="10%"><h4>: Kartasura</h4>
                                                                    <h4>: 03 Juni 2021</h4></td>
                                                            </tr>
                                                        </table>
                                                        <div class="profile-image">
                                                            <img class="images-responsive" src="/images/Penetapan Kelulusan.png" alt="">
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-print-none">
                                                <div class="float-right">
                                                    <a href="javascript:window.print()" class="btn btn-primary"><i class="fa fa-print"></i> print</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endif
                                </div>
                            </div>
                                
                            <!-- end row -->
                        
                            @include('layouts.footer')
                        
                        </div>
    
@endsection

@push('javacriptsContent')
    
@endpush