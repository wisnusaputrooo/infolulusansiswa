@extends('layouts.pages')

@section('TitlePage', 'Sistem Informasi Kelulusan')


@section('pageContent')
                        <!-- Page content -->
                        <div class="container-fluid pt-8">
                            <div class="page-header mt-0 shadow p-3">
                                <ol class="breadcrumb mb-sm-0">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Data</li>
                                </ol>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                @include('layouts.message-alert')
                                    <div class="card-box card shadow">
                                        <div class="card-body border-bottom">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <h3 class="logo mb-0">Form Update Siswa</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-0">
                                                <form action="/update-data" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">                                    
                                                    <div class="row mt-4">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Nomor Telepon (Aktif dan terhubung whatsapp)</label>
                                                                <input type="text" class="form-control" name="nomor_telepon" placeholder="Contoh : 089673427488" {{($loginStory->nomor_telepon != null) ? 'disabled value='.$loginStory->nomor_telepon : 'required'}} 
                                                                {{(!empty(old('nomor_telepon'))) ? 'value='.old('nomor_telepon') :'' }}>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="form-label">Link Akun Facebook</label>
                                                                <input type="text" class="form-control" name="acc_facebook" placeholder="Contoh : https://web.facebook.com/smkharapankartasura" {{($loginStory->acc_facebook != null) ? 'disabled value='.$loginStory->acc_facebook : 'required'}} {{(!empty(old('acc_facebook'))) ? 'value='.old('acc_facebook') :'' }}>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="form-label">Username Instagram</label>
                                                                <input type="text" class="form-control" name="acc_instagram" placeholder="Contoh : @smkharapankartasura" {{($loginStory->acc_instagram != null) ? 'disabled value='.$loginStory->acc_instagram : 'required'}} {{(!empty(old('acc_instagram'))) ? 'value='.old('acc_instagram') :'' }}>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="form-label">Username twitter</label>
                                                                <input type="text" class="form-control" name="acc_twitter" placeholder="Contoh : @ganjarpranowo" {{($loginStory->acc_twitter != null) ? 'disabled value='.$loginStory->acc_twitter : ''}} {{(!empty(old('acc_twitter'))) ? 'value='.old('acc_twitter') :'' }}>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mt-4">
                                                            <div class="float-left">
                                                                <h4><strong>Catatan: </strong></h4>
                                                                <address>
                                                                    <strong>Kami meminta data diatas digunakan apabila ada informasi dan hal penting yang perlu disampaikan secara pribadi atau langsung ke kamu, semisal Lowongan pekerjaan, ijazah, Tracking Alumni, dan lain sebagainya. Jadi kami Mohon untuk kesediaannya mengisikan data dengan tepat dan jujur.</strong>
                                                                </address>
                                                            </div>
                                                        </div><!-- end col -->
        
                                                    </div>
                                                    <!-- end row -->
                                                    <hr>
                                                    <div class="d-print-none">
                                                        <div class="float-right">
                                                            @if ($loginStory->nomor_telepon == null && $loginStory->acc_facebook == null && $loginStory->acc_instagram == null && $loginStory->acc_twitter == null)
                                                            <button class="btn btn-icon btn-default mt-1 mb-1" type="submit">
                                                                <span class="btn-inner--icon"><i class="ti-cloud-up"></i></span>
                                                                <span class="btn-inner--text"> Simpan</span></button>                    
                                                            @else
                                                            <a href="#" class="btn btn-icon btn-default mt-1 mb-1 disabled">
                                                                <span class="btn-inner--icon"><i class="ti-cloud-up"></i></span>
                                                                <span class="btn-inner--text"> Simpan</span>
                                                            </a>                                                                
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        
                            @include('layouts.footer')
                        
                        </div>
    
@endsection

@push('javacriptsContent')
    
@endpush