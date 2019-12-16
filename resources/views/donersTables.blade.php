
<!DOCTYPE html5>





@foreach($doners as $doner)
    <h1>{{$doner->d_mobile}}</h1>
@endforeach

@foreach($doners as $doner)
    <h1>{{$doner->blood_type}}</h1>
@endforeach

@foreach($doners as $doner)
    <h1>{{$doner->city_name}}</h1>
    @endforeach

@foreach($doners as $doner)
    <h1>{{$doner->governorate_name}}</h1>
    @endforeach

    </html>
