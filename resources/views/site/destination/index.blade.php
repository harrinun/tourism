@extends('layouts.site')
{{--@section('hero')
    @include('site.partials.pages_hero',['page'=>'Hotel'])
@endsection--}}

@section('content')

    <section class="your-destinations-section-demo">
        <div class="container">
            <div class="your-destinations">
                <div class="your-destionations__top">
                    <div class="title">
                        <h2>Your Destinations</h2>
                    </div>
                    <div class="your-destinations__bar">
                        <div class="view-switcher">
                            <div class="view-item">
                                <a href="#">
                                    <i class="awe-icon awe-icon-list"></i>
                                </a>
                            </div>
                            <div class="view-item view-active">
                                <a href="#">
                                    <i class="awe-icon awe-icon-grid"></i>
                                </a>
                            </div>
                        </div>
                        <div class="order">
                            <select class="orderby awe-select">
                                <option>Best Match</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="destination-grid-content">
                    <div class="row">
                        <div class="awe-masonry">
                            <!-- GALLERY ITEM -->
                            @foreach($data['destinations']->unique('city') as $destination)
                            <div class="awe-masonry__item">
                                <a href="{{route('hotels.index')}}?search=city:{{$destination->city}}">
                                    <div class="image-wrap image-cover">
                                        @foreach($destination->images->shuffle()->take(1) as $image)
                                        <img src="{{asset($image->card_size_path)}}" alt="">
                                        @endforeach
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="{{route('hotels.index')}}?search=city:{{$destination->city}}">{{$destination->city}}</a></h2>

                                </div>
                                <div class="item-available">
                                    <span class="count">{{$data['destinations']->where('city',$destination->city)->count()}}</span>
                                    available hotel(s)
                                </div>
                            </div>
                             @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection