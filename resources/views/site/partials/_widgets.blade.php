<div class="col-md-3 col-md-pull-9">
    <div class="page-sidebar">
        <div class="sidebar-title">
            <h2>{{$page}} filter</h2>
            <div class="clear-filter">
                <a href="#">Clear all</a>
            </div>
        </div>
        <!-- WIDGET -->
        <div class="widget widget_has_radio_checkbox">
            <h3>{{$page}} Type</h3>
            <ul>
                {{--todo make dynamic by looping over entity types--}}
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Hotel
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Hostel
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Motel
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Homestay
                    </label>
                </li>
            </ul>
        </div>
        <!-- END / WIDGET -->

        <!-- WIDGET -->
        <div class="widget widget_price_filter">
            <h3>Price Level</h3>
            <div class="price-slider-wrapper">
                <div class="price-slider"></div>
                <div class="price_slider_amount">
                    <div class="price_label">
                        <span class="from"></span> - <span class="to"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END / WIDGET -->

        <!-- WIDGET -->
        <div class="widget widget_has_radio_checkbox">
            <h3>Star Rating</h3>
            <ul>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                            </span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        <span class="rating">
                                                Unrated
                                            </span>
                    </label>
                </li>
            </ul>
        </div>
        <!-- END / WIDGET -->

        <!-- WIDGET -->
        <div class="widget widget_has_radio_checkbox">
            <h3>Distance</h3>
            <ul>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Near Airport
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Near Shopping District
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Near Attractions
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Near Traffic station
                    </label>
                </li>
            </ul>
        </div>
        <!-- END / WIDGET -->

        <!-- WIDGET -->
        <div class="widget widget_has_radio_checkbox">
            <h3>Service Include</h3>
            <ul>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Room service
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Laundry
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Meal at room
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Wifi &amp; internet
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Parking lot
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        TV and appliances
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Pool
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <i class="awe-icon awe-icon-check"></i>
                        Gym and Spa
                    </label>
                </li>
            </ul>
        </div>
        <!-- END / WIDGET -->

        <!-- WIDGET -->
        <div class="widget widget_product_tag_cloud">
            <h3>Tags</h3>
            <div class="tagcloud">
                <a href="#">Hotel</a>
                <a href="#">Motel</a>
                <a href="#">Hostel</a>
                <a href="#">Homestay</a>
            </div>
        </div>
        <!-- END / WIDGET -->

    </div>
</div>