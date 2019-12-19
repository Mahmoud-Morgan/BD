@extends('layout')
@section('content')
    <!-- نموذج تسجيل البيانات -->
    <section id="container">
        <div class="inner">
            <div class="align-center">
                <h2 class="align-center" style="color:#6CC091;"><em>تسجيل البيانات المتبرع</em></h2>

                <form action="donorstore" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <fieldset>
                        <div class="field half name">
                            <label for="name" class="align-right"><em>اسم المتبرع</em></label>
                            <input name="d_name" id="d_name" type="text" class="align-right" placeholder="الاسم">
                        </div><br>



                        <div class="field half blood type ">
                            <label for="bloodtype" class="align-right"><em> فصيله  الدم</em></label>
                            <select name="d_b_id" id="d_b_id">
                                @foreach(App\bloodType ::get() as $bloodType)
                                    <option value='{{$bloodType->b_id}} '>   {{$bloodType->blood_type}} </option>
                                @endforeach
                            </select>
                        </div><br>



                        <div class="field half phone number">
                            <label for="phonenumber" class="align-right"><em>رقم التليفون</em></label>
                            <input name="d_mobile"   type="text"class="align-right" placeholder="رقم التليفون">
                        </div><br>


                        <div class="field half email">
                            <label for="phonenumber" class="align-right"><em>الاميل</em></label>
                            <input name="email"   type="text"class="align-right" placeholder="email@example.com">
                        </div><br>




                        <div class="field half country ">
                            <label for=" country" class="align-right"><em>المحافظه</em></label>
                            <select name="d_governorate" id="d_governorate">
                                @foreach(App\governorate ::get() as $governorate)
                                    <option value='{{$governorate->id}} '>   {{$governorate->governorate_name}} </option>
                                @endforeach
                            </select>


                            <label for="city" class="align-right"><em>المدينه</em></label>
                            <select name="d_city" id="d_city">
                                @foreach(App\citie ::get() as $city)
                                    <option value='{{$city->c_id}} '>   {{$city->city_name}} </option>
                                @endforeach
                            </select>

                        </div><br>

                        <button type="submit" style="...">تسجيل البيانات</button>
                    </fieldset>

                </form>


                <br>
            </div>
        </div>
    </section>
    </body>
@endsection
