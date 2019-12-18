<!DOCTYPE HTML>
<!--
	 project by iti alqantaruh team

-->
<html>
<head>

    <<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

</head>

<body>
@extends('layout')
@section('content')
<!-- Header -->


<!-- Banner -->
<section id="banner">
    <div class="inner">
        <header>
                    <h1>

                    </h1>
        </header>

        <div class="flex ">

            <div>


                <a href="/donor" ><button style="font-size:20px"> متبرع جديد </button></a>

            </div>

            <div>


                <button style="font-size:20px">بنوك الدم</button>

            </div>

            <div>



                <a href="/patient" ><button style="font-size:20px">محتاج دم</button></a>

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
                    <h2>التبرع بالدم</h2>
                </header>
                <h4>هي إجراء طبي يكمن في نقل دم من شخص سليم <br> الي شخص مريض محتاج للدم يستخدم ذلك الدم في عمليات <br> نقل الدم كاملا أو بأحد مكوناته فقط بعد فصلها.</h4>
                <footer>
                    <a href="/info" ><button style="font-size:15px">اقراء المزيد</button></a>
                </footer>
            </article>
            <article>
                <div class="image round">
                    <img src="images/pic02.jpg" alt="Pic 02" />
                </div>
                <header>
                    <h2>فوائد التبرع بالدم</h2>
                </header>

                <h4>زيادة نشاط نخاع العظم لإنتاج خلايا دم جديدة <br>  التبرع بالدم يساعد علي تقليل نسبة الحديد في الدم   <br> لأنه يعتبر أحد أسباب الإصابة بأمراض القلب وانسداد الشرايين.</h4>


                <footer>
                    <a href="/info" ><button style="font-size:15px">اقراء المزيد</button></a>
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
