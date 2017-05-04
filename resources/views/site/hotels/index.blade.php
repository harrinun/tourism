@extends('layouts.site')
@section('hero')
    @include('site.partials.pages_hero',['page'=>'Hotel'])
@endsection

@section('content')
    <section class="filter-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-top">
                        <select class="awe-select">
                            <option>Best Match</option>
                            <option>Best Rate</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-9 col-md-push-3">
                    <div class="filter-page__content">
                        <div class="filter-item-wrapper">
                            <!-- ITEM -->
                            @if($hotels->isEmpty())
                                <h3 class="text-center">No Hotels Added</h3>
                            @else
                                @foreach($hotels as $hotel)

                                    <div class="hotel-item">
                                <div class="item-media">
                                    <div class="image-cover">
                                        @foreach($hotel->images->take(1) as $image)
                                        <img src="{{asset($image->card_size_path)}}" alt="">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="item-body">
                                    <div class="item-title">
                                        <h2>
                                            <a href="{{route('hotels.show',$hotel->slug)}}">{{$hotel->name}}</a>
                                        </h2>
                                    </div>
                                    <div class="item-hotel-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="item-address">
                                        <i class="awe-icon awe-icon-marker-2"></i>
                                        {{$hotel->city}}
                                    </div>
                                    <div class="item-footer">
                                        <div class="item-rate">
                                            <span>7.5 Good</span>
                                        </div>
                                        <div class="item-icon">
                                            <i class="awe-icon awe-icon-gym"></i>
                                            <i class="awe-icon awe-icon-car"></i>
                                            <i class="awe-icon awe-icon-food"></i>
                                            <i class="awe-icon awe-icon-level"></i>
                                            <i class="awe-icon awe-icon-wifi"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-price-more">
                                    <div class="price">
                                        one night from
                                        <span class="amount">$200</span>
                                    </div>
                                    <a href="#" class="awe-btn">Book now</a>
                                </div>
                            </div>
                                @endforeach
                            @endif
                            {{$hotels->links()}}
                        </div>
                    </div>
                </div>
                @include('site.partials._widgets',['page'=>'Hotel'])
            </div>
        </div>
    </section>
@endsection