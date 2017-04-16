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
                    <li class="">
                        <a href="destinations-list.html">Destinations</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('hotels.index')}}">Hotels</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('attractions.index')}}">Attraction</a>
                    </li>

                    <li class="">
                        <a href="{{url('/')}}">Contact</a>
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