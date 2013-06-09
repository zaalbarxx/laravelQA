<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>
	@section('title')
	Title
	@show
</title>
@section('css')
{{HTML::style('css/main.css')}}
@show
@section('javascript')
@show
</head>
<body>
	<header id='header'>
		<ul id='nav'>
			<li>{{HTML::linkRoute('index', 'Home')}}</li>
			<li>{{HTML::linkRoute('register', 'Register')}}</li>
			<li>{{HTML::linkRoute('login','Login')}}</li>
		</ul>
	</header>
	<div id="content">
		@yield('content')
	</div>
	<footer id='footer'>
		By Maksym Cierżniak {{date('Y')}}
	</footer>
</body>
</html>