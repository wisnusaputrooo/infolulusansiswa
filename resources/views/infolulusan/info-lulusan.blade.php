@extends('layouts.main')
@push('css')
    <!-- Custom scroll bar css-->
	<link href="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endpush

@section('TitlePage', 'Data Lulusan 2021')

@section('pages')
<div class="page">
    <div class="page-main">
        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                                            <!-- Page content -->
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    @include('layouts.message-alert')
                                                        <div class="card-box card shadow">
                                                            <div class="card-body border-bottom">
                                                                <h3 class=" mb-0">Data Lulusan Siswa tahun 2020/2021</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped table-bordered w-100 text-nowrap dataTable no-footer">
                                                                        <thead>
                                                                            <tr class="text-center">
                                                                                <th>No</th>
                                                                                <th>Nama</th>
                                                                                <th>Kelas</th>
                                                                                <th>NISN</th>
                                                                                <th>Tanggal Lahir</th>
                                                                                <th>Total Login</th>
                                                                                <th>Status Kelulusan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $no = 1?>
                                                                            @foreach ($users as $user)
                                                                            <tr>
                                                                                <td>{{$no++}}</td>
                                                                                <td>{{$user->nama}}</td>
                                                                                <td>{{$user->kelas}}</td>
                                                                                <td>{{$user->nisn}}</td>
                                                                                <td class="text-center">{{$user->tanggal_lahir}}</td>
                                                                                <td class="text-center">{{$user->jumlah_akses}}</td>
                                                                                <td class="text-center">
                                                                                        {!!($user->is_pass) ? '<span class="badge  badge-lg badge-default">Lulus</span>':'<span class="badge  badge-lg badge-warning">Dipending</span>'!!}
                                                                                </td>
                                                                            </tr> 
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            
                                                @include('layouts.footer')
                                            
                                            </div>
                </div>
            </div>
        </div>
        <!-- app-content -->
    </div>
</div>
<!-- Back to top -->
<a class="d-print-none" href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
 
@endsection

@push('javacriptsContent')
    <!-- Fullside-menu Js-->
	<script src="{{asset('assets/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>

	<!-- Custom scroll bar Js-->
	<script src="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

	<!-- Ansta JS -->
	<script src="{{asset('assets/js/custom.js')}}"></script>

    <script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>

    <script>
		$(document).ready(function () {
			//Disable cut copy paste
			$(document).bind('cut copy paste', function (e) {
				e.preventDefault();
			});
			
			//Disable mouse right click
			$(document).on("body",function(e){
				return false;
			});
		});
	</script>
@endpush