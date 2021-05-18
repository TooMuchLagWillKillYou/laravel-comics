@extends('layouts.main-layout')
@section('content')

    <main>

        <div id="blue-bar" class="centering">
            <img src="{{ $item['thumb'] }}" alt="">
        </div>
    
    
        <div class="centering">
    
            <section>          
                <div class="description">
                    <h2>{{ $item['title'] }}</h2>
    
                    <div class="price">
                        <span>U.S. Price</span>
                        {{ $item['price'] }}
                        <span>AVAILABLE</span>
                    </div>
    
                    <p>{{ $item['description'] }}</p>
                </div>
                
                <div>
                    <img src="{{ asset('/storage/assets/adv.jpg') }}" alt="">
                </div>
            </section>
    
            <section>
                <div class="talent">

                    <h3>TALENT</h3>
                    <table>
                        <tr>
                            <td>Art By</td>
                            <td>
                                @foreach ($item['artists'] as $artist)
                                    {{ $artist }}
                                @endforeach
                            </td>
                        </tr>

                        <tr>
                            <td>Written By</td>
                            <td>
                                @foreach ($item['writers'] as $writer)
                                    {{ $writer }}
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="specs">
                    
                    <h3>SPECS</h3>
                    <table>
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
    
        </div>

    </main>

@endsection