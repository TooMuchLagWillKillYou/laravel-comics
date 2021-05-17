@extends('layouts.main-layout')
@section('content')
    <div id="current-series" class="centering">

        <div id="thumbs">

            @foreach ($data as $d)
            
                <div class="box">
                    <div class="img-container">
                        <img src="{{ $d['thumb'] }}" alt="">
                    </div>
                    <p>
                        {{ $d['title'] }}
                    </p>
                </div>
            
            @endforeach

        </div>
    </div>
@endsection