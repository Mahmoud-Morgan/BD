<!DOCTYPE HTML>
<!--
	 project by iti alqantaruh team

-->
<html>
<head>

    <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

</head>
@extends('layout')
@section('content')
<body>

<!-- Header -->


<!-- Banner -->
<section id="banner">
    <div class="inner">
        <header>
            <h1>مرحبا   بك    معنا </h1>
        </header>

        <div class="flex ">

            <div>

                <h3>هل تريد ان تتبرع</h3>
                <br>

                <a href="/doner" ><button style="font-size:25px">متبرع<i class="fa fa-heart"></i></button></a>

            </div>

            <div>

                <h3>لمعرفة بنوك الدم</h3>
                <br>
                <button style="font-size:25px">بنوك الدم<i class="fa fa-heart"></i></button>

            </div>

            <div>
                <h3>
                    هل تريد متبرع
                </h3>
                <br>

                <a href="/patient" ><button style="font-size:25px">محتاج دم<i class="fa fa-heart"></i></button></a>

            </div>

        </div>


    </div>
</section>


<!-- Three -->
<section id="three" class="wrapper align-center">
    <div class="inner">
        <div class="flex flex-2">
            <article>
                <div class="image round">
                    <img src="images/pic01.jpg" alt="Pic 01" />
                </div>
                <header>
                    <h3>Lorem ipsum<br /> dolor amet nullam</h3>
                </header>
                <p>Morbi in sem quis dui placerat ornare. Pellentesquenisi<br />euismod in, pharetra a, ultricies in diam sed arcu. Cras<br />consequat  egestas augue vulputate.</p>
                <footer>
                    <a href="generic.html" ><button style="font-size:15px">Button <i class="fa fa-heart"></i></button></a>
                </footer>
            </article>
            <article>
                <div class="image round">
                    <img src="images/pic02.jpg" alt="Pic 02" />
                </div>
                <header>
                    <h3>Sed feugiat<br /> tempus adipicsing</h3>
                </header>
                <p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
                <footer>
                    <a href="generic.html" ><button style="font-size:15px">Button <i class="fa fa-heart"></i></button></a>
                </footer>
            </article>
        </div>
    </div>
</section>
@endsection
<!-- Footer -->




<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/skel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/until.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

</body>
</html>
