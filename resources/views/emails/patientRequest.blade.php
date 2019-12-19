<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
</head>
<body>


<section id="container">
    <div class="inner">
        <div class="align-center">
            <h2 class="align-center" style="color:#6CC091;"><strong><em> طلب تبرع </em></strong></h2>

            <form action="" method="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <fieldset>
                    <div class="field half name">
                        <h3 class="align-right" style="color:#6CC091;"><em> بيانات المريض </em></h3>

                        <label for="name" class="align-right" style="color:#6CC091;"><em>اسم المريض :</em></label>
                        {{$patient->p_name}}
                    </div><br>


                    <div class="field half name">
                        <label for="name" class="align-right" style="color:#6CC091;"><em>الحالة المرضية :</em></label>
                        {{$patient->p_case}}
                    </div><br>

                    <div class="field half blood type ">
                        <label for="bloodtype" class="align-right" style="color:#6CC091;"><em> فصيله  الدم :</em></label>
                        {{$donor->blood_type}}
                    </div><br>

                    <div class="field half hospital">
                        <label for="hospital" class="align-right" style="color:#6CC091;"><em> اسم المستشفي :</em></label>
                        {{$patient->hospital}}
                    </div><br>

                    <div class="field half phone number">
                        <label for="phonenumber" class="align-right" style="color:#6CC091;"><em>رقم التليفون :</em></label>
                        {{$patient->p_mobile}}
                    </div><br>




                    <div class="field half country ">
                        <label for=" country" class="align-right" style="color:#6CC091;"><em>المحافظه :</em></label>
                        {{$donor->governorate_name}}


                        <label for="city" class="align-right" style="color:#6CC091;"><em>المدينه :</em></label>
                        {{$donor->city_name}}
                    </div><br>


                </fieldset>

            </form>

        </div>
    </div>
</section>
</body>
</html>
