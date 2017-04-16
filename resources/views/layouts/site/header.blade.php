<header id="header-page">
    <div class="header-page__inner">
        <div class="container">
            <!-- LOGO -->
            <div class="logo">
                <a href="{{url('/')}}"><img src="images/logo.png" alt=""></a>
            </div>
            <!-- END / LOGO -->

            <!-- NAVIGATION -->
            <nav class="navigation awe-navigation" data-responsive="1200">
                <ul class="menu-list">
                    <li class="current-menu-parent">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="destinations-list.html">Destinations</a>
                        <ul class="sub-menu">
                            <li><a href="destinations-list.html">List</a></li>
                            <li><a href="destinations-grid.html">Grid</a></li>
                            <li class="menu-item-has-children">
                                <a href="destinations-trip.html">Detail</a>
                                <ul class="sub-menu">
                                    <li><a href="destinations-trip.html">Trips in destination</a></li>
                                    <li><a href="destinations-hotel.html">Hotels in destination</a></li>
                                    <li><a href="destinations-attraction.html">Attraction in destination</a></li>
                                    <li><a href="destinations-flight.html">Flights in destination</a></li>
                                    <li><a href="destinations-train.html">Train in destination</a></li>
                                </ul>
                            </li>
                            <li><a href="destinations-list-dark.html">List (Dark)</a></li>
                            <li><a href="destinations-grid-dark.html">Grid (Dark)</a></li>
                            <li class="menu-item-has-children">
                                <a href="destinations-trip.html">Detail (Dark)</a>
                                <ul class="sub-menu">
                                    <li><a href="destinations-trip-dark.html">Trips in destination</a></li>
                                    <li><a href="destinations-hotel-dark.html">Hotels in destination</a></li>
                                    <li><a href="destinations-attraction-dark.html">Attraction in destination</a></li>
                                    <li><a href="destinations-flight-dark.html">Flights in destination</a></li>
                                    <li><a href="destinations-train-dark.html">Train in destination</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="trip.html">Trips</a>
                        <ul class="sub-menu">
                            <li><a href="trip.html">Trips</a></li>
                            <li><a href="trip-detail.html">Trips Detail</a></li>
                            <li><a href="trip-dark.html">Trips (Dark)</a></li>
                            <li><a href="trip-detail-dark.html">Trips Detail (Dark)</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('hotels.index')}}">Hotels</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="flight.html">Flight</a>
                        <ul class="sub-menu">
                            <li><a href="flight.html">Flight</a></li>
                            <li><a href="flight-detail.html">Flight Detail</a></li>
                            <li><a href="flight-dark.html">Flight (Dark)</a></li>
                            <li><a href="flight-detail-dark.html">Flight Detail (Dark)</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="train.html">Train</a>
                        <ul class="sub-menu">
                            <li><a href="train.html">Train</a></li>
                            <li><a href="train-detail.html">Train Detail</a></li>
                            <li><a href="train-dark.html">Train (Dark)</a></li>
                            <li><a href="train-detail-dark.html">Train Detail (Dark)</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('attractions.index')}}">Attraction</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-post.html">Single Post</a></li>
                                    <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                    <li><a href="single-post-dark.html">Single Post (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="login.html">Log In</a>
                                <ul class="sub-menu">
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="login.html">Log In (Dark)</a></li>
                                    <li><a href="register.html">Register (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="checkout-yourcart.html">Checkout</a>
                                <ul class="sub-menu">
                                    <li><a href="checkout-yourcart.html">Your cart</a></li>
                                    <li><a href="checkout-customer.html">Customer</a></li>
                                    <li><a href="checkout-complete.html">Complete</a></li>
                                    <li><a href="checkout-yourcart-dark.html">Your cart (Dark)</a></li>
                                    <li><a href="checkout-customer-dark.html">Customer (Dark)</a></li>
                                    <li><a href="checkout-complete-dark.html">Complete (Dark)</a></li>
                                </ul>
                            </li>
                            <li><a href="shortcode.html">Shortcode</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="contact.html">Contact</a>
                        <ul class="sub-menu">
                            <li><a href="contact.html">Light</a></li>
                            <li><a href="contact-dark.html">Dark</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END / NAVIGATION -->

            <!-- SEARCH BOX -->
            <div class="search-box">
                <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                <form class="form-search">
                    <div class="form-item">
                        <input type="text" value="Search &amp; hit enter">
                    </div>
                </form>
            </div>
            <!-- END / SEARCH BOX -->


            <!-- TOGGLE MENU RESPONSIVE -->
            <a class="toggle-menu-responsive" href="#">
                <div class="hamburger">
                    <span class="item item-1"></span>
                    <span class="item item-2"></span>
                    <span class="item item-3"></span>
                </div>
            </a>
            <!-- END / TOGGLE MENU RESPONSIVE -->

        </div>
    </div>
</header>