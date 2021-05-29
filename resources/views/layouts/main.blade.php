<!DOCTYPE html>
<html lang="id" dir="ltr">



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Siswa SMK Harapan diterima kerja sebelum lulus">
	<meta name="author" content="Wisnu Aji - Konsepsederhana.id">

    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!-- Title -->
	<title>@yield('TitlePage') - SMK Harapan Kartasura</title>

	<!-- Favicon -->
	<link href="{{asset('assets/img/brand/favicon.png')}}" rel="icon" type="image/png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

	<!-- Icons -->
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Ansta CSS -->
	<link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" type="text/css">

	<!-- Single-page CSS -->
	<link href="{{asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="app sidebar-mini rtl bg-gradient-primary">
    @yield('login')
    @yield('pages')

	<!-- Ansta Scripts -->
	<!-- Core -->
	<script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

</body>


</html>