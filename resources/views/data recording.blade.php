<!DOCTYPE HTML>

<html>
	<head>
		<title>Data recording</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">

					<nav id="nav">
						<a href="index.html">الصفحه الرئيسيه</a>
						<a href="generic.html">انا متبرع</a>
						<a href="elements.html">انا محتاج دم</a>
					</nav>

				</div>
			</header>

	<!-- نموذج تسجيل البيانات -->
		<section id="container">
			<div class="inner">
				<div class="align-center">
					<h2 class="align-center" style="color:red;"><em>تسجيل البيانات</em></h2>

					<form action="#" method="post">

					<div class="field half name">
					<label for="name" class="align-right"><em>اسم المريض</em></label>
					<input name="name"  type="text" class="align-right" placeholder="الاسم">
					</div><br>
						<div class="field half email">
					<label for="email" class="align-right"><em>الاميل</em></label>
					<input name="email" type="text" class="align-right" placeholder="الاميل">
					</div><br>
					<div class="field half phone number">
					<label for="phonenumber" class="align-right"><em>رقم التليفون</em></label>
					<input name="phonenumber"   type="text"class="align-right" placeholder="رقم التليفون">
					</div><br>
						<div class="field half hospital">
					<label for="hospital" class="align-right"><em>المستشفي</em></label>
					<input name="hospital" type="text"class="align-right" placeholder="اسم المستشفي">
					</div><br>
					<div class="field half blood type ">
					<label for="bloodtype" class="align-right"><em> فصيله  الدم</em></label>
					<select name="bloodtype">
						<option>الفصيله</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select>
					</div><br>
					<div class="field half country ">
					<label for=" country" class="align-right"><em>المحافظه</em></label>

					<select name=" country" class="align-right">
						<option>اسم المحافظه</option>
						<option>القاهره</option>
						<option>الاسماعيليه</option>
						<option>بورسعيد</option>

					</select>


						<label for="city" class="align-right"><em>المدينه</em></label>

					<select name="city">
						<option>اسم المدينه</option>
						<option>فايد</option>
						<option>القنطره شرق</option>
						<option>الشيخ زايد</option>

					</select>

					</div><br>
						<button type="submit">تسجيل الدخول</button>
				</form>


				</div>
			</div>
		</section>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
