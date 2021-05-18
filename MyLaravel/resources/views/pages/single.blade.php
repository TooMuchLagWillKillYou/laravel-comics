@extends('layouts.main-layout')
@section('content')

    <div id="blue-bar" class="centering">
        <img src="{{ $item['thumb'] }}" alt="">
    </div>


    <div class="centering">
        <section>
            
            <div class="description">
                <h2>{{ $item['title'] }}</h2>

                <div class="price">
                    <span>U.S. Price {{ $item['price'] }}</span>
                </div>

                <p>{{ $item['description'] }}</p>
            </div>
            <div>
                <img src="{{ asset('/storage/assets/adv.jpg') }}" alt="">
            </div>

        </section>

        <section>

        </section>
    </div>
@endsection