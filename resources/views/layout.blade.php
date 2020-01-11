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
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">--}}
{{--        <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">--}}
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="/" class="logo"><strong>جدد دمك</strong></a>
					<nav id="nav">
						<a href="/aboutus">عن موقعنا</a>
						<a href="/info">فوائد التبرع</a>
                        <a href="/search">بيانات المتبرعين</a>
						<a href="/">الرئيسية</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			@yield('content')

		<!-- Footer -->
			<footer id="footer">

                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
                    <br>
                    <li><a href="/aboutus" > <p>اتصل بنا &#x260E;</p> </a></li>
                        <li><a href="/aboutus"> &copy; MS2D2A TEAM 2019 </a></li>
                </ul>




            </footer>

		<!-- Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/skel.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/until.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

	</body>
</html>
