@extends('layouts.main-layout')
@section('content')

    <main>

        <div id="blue-bar" class="centering">
            <img src="{{ $item['thumb'] }}" alt="">
        </div>
    
        <section class="centering">          
            <div class="description">
                <h2>{{ $item['title'] }}</h2>

                <div class="price">
                    <span>U.S. Price</span>
                    {{ $item['price'] }}
                    <span>AVAILABLE</span>
                </div>

                <p>{{ $item['description'] }}</p>
            </div>
            
            <div class="adv">
                <h3>ADVERTISEMENT</h3>
                <img src="{{ asset('/storage/assets/adv.jpg') }}" alt="">
            </div>
        </section>

        <section class="centering">
            <div class="talent">

                <table>
                    <tr><th><h3>Talent</h3></th></tr>

                    <tr>
                        <td>Art By:</td>
                        <td>
                            @foreach ($item['artists'] as $artist)
                                {{ $artist }},

                                @if ($loop->last)
                                    {{ $artist }}
                                @endif
                            @endforeach
                        </td>
                    </tr>

                    <tr>
                        <td>Written By:</td>
                        <td>
                            @foreach ($item['writers'] as $writer)
                                {{ $writer }},

                                @if ($loop->last)
                                    {{ $writer }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="specs">
                
                <table>
                    <tr><th><h3>Specs</h3></th></tr>

                    <tr>
                        <td>
                            Series:
                        </td>
                        <td>
                            {{ $item['series'] }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            U.S. Price:
                        </td>
                        <td>
                            {{ $item['price'] }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            On Sale Date:
                        </td>
                        <td>
                            {{ $item['sale_date'] }}
                        </td>
                    </tr>
                </table>
            </div>

        </section>
    
    </main>

@endsection