@extends('layouts.site')
@section('content')

    <section class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-detail__info">
                        <div class="product-title">
                            <h2>{{$hotel->name}}</h2>
                            <div class="hotel-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-address">
                            <span>{{$hotel->address}},{{$hotel->city}},   +233-{{$hotel->phone_number}}</span>
                        </div>
                        <div class="product-email">
                            <i class="fa fa-envelope"></i>
                            <a href="#">Send Email Inquiry</a>
                        </div>

                        <div class="rating-trip-reviews">
                            <div class="item good">
                                <span class="count">7.5</span>
                                <h6>Average rating</h6>
                                <p>Good</p>
                            </div>

                        </div>

                        <div class="product-descriptions">
                        </div>

                        <div class="property-highlights">
                            <h3>Property highlights</h3>
                            <div class="property-highlights__content">
                                <div class="item">
                                    <i class="awe-icon awe-icon-unlock"></i>
                                    <span>Room service</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-beds"></i>
                                    <span>Bunkbed available</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-beds"></i>
                                    <span>Bunkbed available</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-laundry"></i>
                                    <span>Laundry</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-shower"></i>
                                    <span>Shower</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-shower"></i>
                                    <span>Shower</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-pool"></i>
                                    <span>Outside Pool</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-meal"></i>
                                    <span>Room meal service</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-meal"></i>
                                    <span>Room meal service</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-key"></i>
                                    <span>High security</span>
                                </div>
                                <div class="item">
                                    <i class="awe-icon awe-icon-tv"></i>
                                    <span>TV in room</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-detail__gallery">
                        <div class="product-slider-wrapper">
                            <div class="product-slider">
                                @foreach($hotel->images as $image)
                                <div class="item">
                                    <img src="{{asset($image->card_size_path)}}" alt="">
                                </div>
                                @endforeach
                            </div>
                            <div class="product-slider-thumb-row">
                                <div class="product-slider-thumb">
                                    @foreach($hotel->images as $image)
                                    <div class="item">
                                        <img src="{{asset($image->card_size_path)}}" alt="">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="product-map">
                            <div data-latlong="21.036697, 105.834871"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="product-tabs tabs">
                        <ul>
                            <li>
                                <a href="#tabs-1">Room detail</a>
                            </li>

                        </ul>
                        <div class="product-tabs__content">
                            <div id="tabs-1">
                                <div class="check-availability">
                                    <form>
                                        <div class="form-group">
                                            <div class="form-elements form-checkin">
                                                <label>Check in</label>
                                                <div class="form-item">
                                                    <i class="awe-icon awe-icon-calendar"></i>
                                                    <input type="text" class="awe-calendar" value="Date">
                                                </div>
                                            </div>
                                            <div class="form-elements form-checkout">
                                                <label>Check out</label>
                                                <div class="form-item">
                                                    <i class="awe-icon awe-icon-calendar"></i>
                                                    <input type="text" class="awe-calendar" value="Date">
                                                </div>
                                            </div>
                                            <div class="form-elements form-adult">
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
                                            <div class="form-elements form-kids">
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

                                            <div class="form-actions">
                                                <input type="submit" value="CHECK AVAILABILITY" class="awe-btn awe-btn-style3">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <table class="room-type-table">
                                    <thead>
                                    <tr>
                                        <th class="room-type">Room type</th>
                                        <th class="room-people">Max</th>
                                        <th class="room-price">Today price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hotel->rooms as $room)
                                    <tr>
                                        <td class="room-type">

                                            <div class="room-title">
                                                <h4>{{$room->roomType->name}}</h4>
                                            </div>
                                            <div class="room-type-footer">
                                                <i class="awe-icon awe-icon-gym"></i>
                                                <i class="awe-icon awe-icon-car"></i>
                                                <i class="awe-icon awe-icon-food"></i>
                                                <i class="awe-icon awe-icon-level"></i>
                                                <i class="awe-icon awe-icon-wifi"></i>
                                            </div>
                                        </td>
                                        <td class="room-people">
                                            {{$room->roomType->no_of_persons}}
                                        </td>
                                        <td class="room-price">
                                            <div class="price">
                                                <span class="amount">GHS {{$room->price_per_night}}</span>
                                                <em>{{$room->no_of_rooms}} room available</em>
                                                <a href="#" class="full-price-open-popup">Full price</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="detail-sidebar">
                        <div class="call-to-book">
                            <i class="awe-icon awe-icon-phone"></i>
                            <em>Call to book</em>
                            <span>02478455455</span>
                        </div>
                        <div class="booking-info">
                            <h3>Booking info</h3>
                            <div class="form-group">
                                <div class="form-elements form-checkin">
                                    <label>Check in</label>
                                    <div class="form-item">
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements form-checkout">
                                    <label>Check out</label>
                                    <div class="form-item">
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-elements form-room">
                                <label>Room detail</label>
                                <!-- FORM ROOM -->
                                <div class="form-group">
                                    <div class="form-item">
                                        <select class="awe-select">
                                            @foreach($)
                                        </select>
                                    </div>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>Number</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END / FORM ROOM -->

                                <div class="add-room-type">
                                    <a href="#"><i class="awe-icon awe-icon-plus"></i>Add More Room type</a>
                                </div>
                            </div>
                            <div class="price">
                                <em>Total for this booking</em>
                                <span class="amount">$5,923</span>
                            </div>
                            <div class="form-submit">
                                <div class="add-to-cart">
                                    <button type="submit">
                                        <i class="awe-icon awe-icon-cart"></i>Add this to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection