@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>I treni di oggi</h1>

        @foreach ($trains as $train)
            <div class="my-3">
                <div>Company: {{ $train->company }}</div>
                <div>{{ $train->departure_station }} - {{ $train->departure_datetime }}</div>
                <div>{{ $train->arrival_station }} - {{ $train->arrival_datetime }}</div>
            </div>
        @endforeach
    </div>
@endsection