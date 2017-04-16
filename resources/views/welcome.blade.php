@extends('layouts.site')
@section('hero')
    @include('layouts.site.hero')
@endsection
@section('content')

    <!-- SEARCH TABS -->
    <section>
        <div class="container">
            <div class="awe-search-tabs tabs">
                <ul>
                    <li>
                        <a href="#awe-search-tabs-1">
                            <i class="awe-icon awe-icon-briefcase"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-2">
                            <i class="awe-icon awe-icon-hotel"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-3">
                            <i class="awe-icon awe-icon-plane"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-4">
                            <i class="awe-icon awe-icon-train"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-5">
                            <i class="awe-icon awe-icon-car"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-6">
                            <i class="awe-icon awe-icon-bus"></i>
                        </a>
                    </li>
                </ul>
                <div class="awe-search-tabs__content tabs__content">
                    <div id="awe-search-tabs-1" class="search-flight-hotel">
                        <h2>Search Flight + Hotel</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>0-11 yo</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Budget</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Hotel Rate</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Tour">
                            </div>
                        </form>
                    </div>
                    <div id="awe-search-tabs-2" class="search-hotel">
                        <h2>Where would you like to go?</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Destinations</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Country, city, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Check in</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Check out</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Guest</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Hotel">
                            </div>

                        </form>
                    </div>
                    <div id="awe-search-tabs-3" class="search-flight">
                        <h2>Search Flight</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>0-11 yo</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Budget</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Flight">
                            </div>
                        </form>
                    </div>

                    <div id="awe-search-tabs-4" class="search-flight">
                        <h2>Search Train</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>0-11 yo</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Budget</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>All types</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Flight">
                            </div>
                        </form>
                    </div>

                    <div id="awe-search-tabs-5" class="search-car">
                        <h2>Search Car</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Picking up</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Droping off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Pink off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Drop off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Car">
                            </div>

                        </form>
                    </div>

                    <div id="awe-search-tabs-6" class="search-bus">
                        <h2>Search Bus</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Picking up</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Droping off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="City, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Pink off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Drop off</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Car">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / SEARCH TABS -->

    <!-- MASONRY -->
    <section class="masonry-section-demo">
        <div class="container">
            <div class="destination-grid-content">
                <div class="section-title">
                    <h3>More than <a href="{{route('attractions.index')}}">{{$destinations->count()}} Destinations</a> is waiting</h3>
                </div>
                <div class="row">
                    <div class="awe-masonry">
                        <!-- GALLERY ITEM -->
                        @if($destinations->isEmpty())
                            <div>
                            <h3 class="text-center title">No Destinations Available</h3>
                            </div>
                        @else
                            @foreach($destinations as $destination)
                                <div class="awe-masonry__item">
                            <a href="#">
                                <div class="image-wrap image-cover">
                                    <img src="images/img/1.jpg" alt="">
                                </div>
                            </a>
                            <div class="item-title">
                                <h2><a href="#">Florenze</a></h2>
                                <div class="item-cat">
                                    <ul>
                                        <li><a href="#">Italy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-available">
                                <span class="count">845</span>
                                available hotel
                            </div>
                        </div>
                            @endforeach
                        @endif
                       {{-- <!-- END / GALLERY ITEM -->
                        <div class="more-destination">
                            <a href="#">More Destinations</a>
                        </div>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END / MASONRY -->


    <section class="sale-flights-section-demo">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sale-flights-tabs tabs">
                        <ul>
                            <li><a href="#sale-flights-tabs-1">Hot trips</a></li>
                        </ul>
                        <div class="sale-flights-tabs__content tabs__content">
                            <div id="sale-flights-tabs-1">

                                <!-- ITEM -->
                                @if($destinations->isEmpty())
                                    <div>
                                        <h3 class="text-center title">No Destinations Available</h3>
                                    </div>
                                @else
                                    @foreach($destinations as $destination)
                                        <div class="trip-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/trip/2.jpg" alt="">
                                        </div>
                                        <div class="trip-icon">
                                            <img src="images/trip.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="#">Spectacular City Views</a>
                                            </h2>
                                        </div>
                                        <div class="item-list">
                                            <ul>
                                                <li>4 Attractions</li>
                                                <li>2 days, 1 night</li>
                                            </ul>
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
                                <!-- END / ITEM -->
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="awe-services">
                        <h2>Why your friends like our services?</h2>
                        <ul class="awe-services__list">
                            <li>
                                <a href="#">
                                    <i class="awe-icon awe-icon-check"></i>
                                    <i class="awe-icon awe-icon-arrow-right"></i>
                                    100,000 real deals
                                    <span>No booking fees . No fake</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="awe-icon awe-icon-check"></i>
                                    <i class="awe-icon awe-icon-arrow-right"></i>
                                    100% trusted reviews
                                    <span>We verify them in person</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="awe-icon awe-icon-check"></i>
                                    <i class="awe-icon awe-icon-arrow-right"></i>
                                    24/7 global support
                                    <span>anytime and any where</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="awe-icon awe-icon-check"></i>
                                    <i class="awe-icon awe-icon-arrow-right"></i>
                                    24/7 global support
                                    <span>anytime and any where</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="awe-icon awe-icon-check"></i>
                                    <i class="awe-icon awe-icon-arrow-right"></i>
                                    Manage your bookings online
                                    <span>anytime and any where</span>
                                </a>
                            </li>
                        </ul>
                        <div class="video-wrapper embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/50880604"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection