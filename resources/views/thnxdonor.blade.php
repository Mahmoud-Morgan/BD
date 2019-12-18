@extends('layout')
@section('content')

    <br><br><br><br><br><br>

    <header class="align-center">
        <h2 style="color:MediumSeaGreen;"><strong> شكرا {{$donor->d_name}} لتسجيل بياناتك </strong> </h2>
    </header>
        <div class="inner">
            <header class="align-center">
                <h4 style="color:MediumSeaGreen;">شكرا لانك اصبحت احد المتبرعين فى "جدد دمك"</h4>


            <br><br><br><br><br><br>

                <a href="/donor" ><button style="font-size:25px"> تسجيل بيانات اخرى </button></a>

            </header>


            <br><br><br>

        </div>


    @endsection
