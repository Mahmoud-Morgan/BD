@extends('layout')
@section('content')

    <br><br><br><br><br><br>

    <header class="align-center">

        <h2 style="color:MediumSeaGreen;"><strong>" شكرا {{$Donor->d_name}} لتسجيل بياناتك "</strong> </h2>

    </header>
        <div class="inner">
            <header class="align-center">
                <h4 > شكرا لانك اصبحت احد المتبرعين فى  </h4>

                <h2 style="color:MediumSeaGreen;">"جدد دمك"</h2>
                <p>سوف يتم ارسال طلب التبرع على  email الخاص بك عند الحاجة, مرفق به بيانات المريض المطلوبة</p>


            <br><br><br><br><br><br>

                <a href="/donor" ><button style="font-size:25px"> تسجيل بيانات اخرى </button></a>

            </header>


            <br><br><br>

        </div>


    @endsection
