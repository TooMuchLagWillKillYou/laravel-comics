@extends('layouts.main-layout')
@section('content')
    <div id="current-series" class="centering">

        <div class="title">
            <h2>CURRENT SERIES</h2>
        </div>

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

        <button>LOAD MORE</button>

    </div>

    <div id="cta" class="centering">
        <ul>
            <li>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
                    <span>SUBSCRIPTION</span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC POWER VISA</span>
                </a>
            </li>
        </ul>
    </div>
@endsection