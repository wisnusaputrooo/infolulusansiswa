@extends('layouts.main')
@push('css')
    <!-- Custom scroll bar css-->
	<link href="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="{{asset('assets/plugins/toggle-sidebar/css/sidemenu.css')}}" rel="stylesheet">

@endpush


@section('pages')
<div id="global-loader"></div>
<div class="page">
    <div class="page-main">
        @include('layouts.sidebar')
        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                    @include('layouts.topbar')
                    @yield('pageContent')
                </div>
            </div>
        </div>
        <!-- app-content -->
    </div>
</div>
<!-- Back to top -->
<a class="d-print-none" href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection

@push('javascripts')
    {{-- <!-- Optional JS -->
	<script src="{{asset('assets/plugins/chart.js/dist/Chart.min.js')}}"></script>
	<script src="{{asset('assets/plugins/chart.js/dist/Chart.extension.js')}}"></script>

	<!-- Data tables -->
	<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script> --}}

	<!-- Fullside-menu Js-->
	<script src="{{asset('assets/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>

	<!-- Custom scroll bar Js-->
	<script src="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

	<!-- Ansta JS -->
	<script src="{{asset('assets/js/custom.js')}}"></script>

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