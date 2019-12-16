
<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Document with bootstrab</title>
{{--	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">--}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mycssfile.css')}}">


</head>
<body>
	<div class="container-fluid bg">
		<div class="rows">
		<div class="col-md-3 col-sm-3 col-xs-12"></div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<form action= "donorstore" method="post" class="form-container">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

		<!--بداية كود النموذج-->
		  <fieldset>


                <div class="form-group row">
                    <h1 class="title"><em>تسجيل البيانات</em></h1><hr></hr>
                </div><br><br>



						<div class="form-group row">
					<label for="exampleInputNameame"><em>الاسم</em></label>
					   <div class="col-sm-10">
					<input type="text" class="form-control" name="d_name" id="d_name" placeholder="الاسم">
					</div>
					  </div><br><br>

					<div class="form-group row">
					<label for="exampleInputEmail1"><em>الاميل</em></label>
					   <div class="col-sm-10">
					<input type="email"  class="form-control" name="email" id="email" placeholder="الاميل">
					</div>
					  </div><br><br>

					<div class="form-group row">
					<label for="exampleInputphonenumberl1"><em>التليفون</em></label>
					   <div class="col-sm-10">
					<input type="text" class="form-control" name="d_mobile" id="d_mobile" placeholder="رقم التليفون">
					</div>
					  </div><br><br>

					<div class="form-group row">
					<label for="bloodtype" ><em>الفصيلهالدم</em></label>
						<div class="col-sm-10">
					<select class="form-control" name="d_b_id" id="d_b_id">
                        @foreach(App\bloodType ::get() as $bloodType)
                            <option value='{{$bloodType->b_id}} '>   {{$bloodType->blood_type}} </option>
                        @endforeach
					</select>
					</div>
					</div><br>

					  	<div class="form-group row">
					<label for="bloodtype" ><em>المحافظه</em></label>
						<div class="col-sm-3">
					<select class="form-control" name="d_governorate" id="d_governorate">
                            @foreach(App\governorate ::get() as $governorate)
                            <option value='{{$governorate->id}} '>   {{$governorate->governorate_name}} </option>
                                @endforeach
					</select>
					</div>

						<label for="bloodtype" ><em>المدينه</em></label>
						<div class="col-sm-3">
					<select class="form-control" name="d_city" id="d_city">
                        @foreach(App\citie ::get() as $city)
                            <option value='{{$city->c_id}} '>   {{$city->city_name}} </option>
                        @endforeach
					</select>
					</div>
					</div><br><br>


					<button type="submit" class="btn btn-danger btn-block">تسجيل الدخول</button>
					</fieldset>
				</form>
		<!--نهاية كود النموذج-->

		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>


    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

			</div>

</body>
</html>
