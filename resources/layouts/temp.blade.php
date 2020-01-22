<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/app.js"></script>
</head>
<body>
	<img src="/public/stepup_logo.001.jpeg">
	@section('header')
	@yield('content')
	@yield('footer')
</body>
</html>