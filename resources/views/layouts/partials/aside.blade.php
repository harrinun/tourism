<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{url('admin/dashboard')}}">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-laptop"></i>
                    <span>Attraction</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.attractions.create')}}">Add New</a></li>
                    <li><a  href="{{route('admin.attractions.index')}}">List All</a></li>
                    <li><a  href="{{route('admin.attraction-types.index')}}">Attraction Types</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="icon-book"></i>
                    <span>Hotels</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.hotels.create')}}">Add New</a></li>
                    <li><a  href="{{route('admin.hotels.index')}}">List</a></li>
                    <li><a  href="{{route('admin.rooms.index')}}">Rooms
                        </a></li>
                    <li><a  href="{{route('admin.room-types.index')}}">Room Types</a></li>

                </ul>
            </li>





        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>