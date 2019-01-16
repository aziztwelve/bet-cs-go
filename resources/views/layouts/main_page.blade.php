<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	
	
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
	
	<link rel="stylesheet" href="{{ asset('one/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('one/css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}">
	<link id="main-styles-link" rel="stylesheet" href="{{ asset('one/css/style.css') }}">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="animsition-overlay">

	@include('layouts.header')
	
	@yield('content')
	
	@include('layouts.footer')
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="{{ asset('one/js/core.min.js') }}"></script>
	<script src="{{ asset('one/js/script.js') }}"></script>
	<script src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
	
	    $('#date').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
	</script>

</body>
</html>


