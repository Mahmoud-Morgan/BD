<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>جدد دمك</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
{{--        <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">--}}
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="/home" class="logo"><strong>جدد دمك</strong></a>
					<nav id="nav">
						<a href="index.html">اتصل بنا</a>
						<a href="generic.html">فوائد التبرع</a>
                        <a href="/search">بيانات المتبرعين</a>
						<a href="/home">الرئيسية</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			@yield('content')

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
                        </ul>



				</div>
			</footer>

		<!-- Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/skel.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/until.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

	</body>
</html>