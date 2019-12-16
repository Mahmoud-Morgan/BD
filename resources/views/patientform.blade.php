<!DOCTYPE HTML>

<html>

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">


@extends('layout')
        @section('content')
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

						<button type="submit" style="...">تسجيل البيانات</button>


				</form>

                    <div>
                        <h3>
                        {{--                           //--}}
                        </h3>
                        <br>

                        <a href="/search" ><button style="font-size:25px"> بيانات المتبرعين</button></a>

                    </div>
                    <br>
				</div>
			</div>
		</section>
@endsection
		<!-- Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/skel.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/until.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

	</body>
</html>
