@extends('layouts.site')
@section('hero')
    @include('site.partials.pages_hero',['page'=>'Attraction'])
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
                            @if($attractions->isEmpty())
                                <h3 class="text-center">No Attractions Added Yet</h3>
                            @else
                                @foreach($attractions as $attraction)
                                    <!-- ITEM -->
                                    <div class="attraction-item">
                                        <div class="item__inner">
                                            <div class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/attraction/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="item-body">
                                                <div class="item-title">
                                                    <h2>
                                                        <a href="#">American Museum of Natural History</a>
                                                    </h2>
                                                </div>
                                                <div class="item-address">
                                                    <i class="awe-icon awe-icon-marker-2"></i>
                                                    9579 Wishing Mount, Wynot, ND,  US
                                                </div>
                                                <div class="item-footer">
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-price-more">
                                                <div class="price">
                                                    Adult ticket
                                                    <ins>
                                                        <span class="amount">$200</span>
                                                    </ins>
                                                    <del>
                                                        <span class="amount">$200</span>
                                                    </del>

                                                </div>
                                                <a href="#" class="awe-btn">Book now</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                @endforeach
                            @endif
                                {{$attractions->links()}}
                        </div>

                    </div>
                </div>
                @include('site.partials._widgets',['page'=>'Attraction'])
            </div>
        </div>
    </section>
@endsection