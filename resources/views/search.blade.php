<!DOCTYPE HTML>
<!--
	 project by iti alqantaruh team

-->
<html>

        <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
        <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">


	<body>
    @extends('layout')
    @section('content')
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo" ><strong>Project</strong> AL Qantaruh Team</a>
					<nav id="nav" >
						<a href="elements.html"	>اتصل بنا</a>
						<a href="generic.html">فوائد التبرع</a>
						<a href="index.html">الرائسية</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle" ><span class="fa fa-bars"></span></a>
				</div>

			</header>

		<!-- Banner -->

			<section id="banner">
				<div class="inner">
                    <form action= "/search" method="post" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <fieldset>
					<header>
						<h1>مرحبا   بك    معنا </h1>
					</header>

					<nav class="navbar navbar-expand-lg navbar-light bg-light">



						<table class="table">
								<thead>
										<th scope="col">
												<button class="button " type="submit">ابحث</button>

									<th scope="col">
											<select name="d_governorate" id="d_governorate" class="chosen-select" tabindex="5">
													<option value="">اسم المحافظه</option>
                                                @foreach(App\governorate ::get() as $governorate)
                                                    <option value='{{$governorate->id}} '>   {{$governorate->governorate_name}} </option>
                                                @endforeach
                                            </select>


									<th scope="col">
											<select name="d_city" id="d_city" class="chosen-select" tabindex="5">
													<option >اسم المدينة </option>
                                                @foreach(App\citie ::get() as $city)
                                                    <option value='{{$city->c_id}} '>   {{$city->city_name}} </option>
                                                @endforeach

											</select>


									<th scope="col">
											<select name="d_b_id" id="d_b_id" class="chosen-select" tabindex="5">
                            					<option >الفصيله </option>
                                                @foreach(App\bloodType ::get() as $bloodType)
                                                    <option value='{{$bloodType->b_id}} '>   {{$bloodType->blood_type}} </option>
                                                @endforeach
                                            </select>
                                </thead>
                        </table>
                    </nav>

                        </fieldset>
                    </form>
                </div>
            </section>


        <div style="width: 95%;" class="table-responsive inner">
        <table class="table table-bordered table-striped">
        <tr>
            <th>رقم التليفون</th>  <th>المحافظة</th> <th>المدينة</th> <th>فصيلة الدم</th>
        </tr>
            @foreach($doners as $doner)
                <tr>
                <td>{{$doner->d_mobile}}</td> <td>{{$doner->governorate_name}}</td> <td>{{$doner->city_name}}</td> <td>{{$doner->blood_type}}</td>
                </tr>
            @endforeach

        </table>

        </div>



    </body>



        @endsection

        <!-- Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/skel.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/until.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>


</html>
