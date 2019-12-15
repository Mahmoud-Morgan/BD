
<!DOCTYPE html5>

@foreach($doners as $doner)
    <h1>{{$doner->d_mobile}}</h1>
    @endforeach

{{--@foreach($bloodtypes as $bloodtype)--}}
{{--    <h1>{{ $bloodtype->blood_type}}</h1>--}}
{{--@endforeach--}}



@foreach($doners as $doner)
    <h1>{{ $doner->d_governorate}}</h1>
    @endforeach

@foreach($doners as $doner)
    <h1>{{$doner->d_city}}</h1>
    @endforeach










    </html>
