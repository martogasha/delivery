<nav id="sidebarleft" class="sidenav">
    <div id="dismiss">
        <i class="fas fa-times"></i>
    </div>
    <div class="sidebar-header">
        <h3>Account</h3>
    </div>
    <div class="sdprofile">
        <div class="sdp-left">
            <img src="{{asset('img/profile4.jpg')}}" alt="profile">
        </div>
        <div class="sdp-right">
            <div class="sd-name">{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</div>
            <div class="sd-status">{{\Illuminate\Support\Facades\Auth::user()->phone}}</div>

        </div>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="{{url('carrierHome')}}"><i class="fas fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{url('inProgress')}}"><i class="fas fa-book"></i>In Progress</a>
        </li>
        <li>
            <a href="{{url('carrierWorkdone')}}"><i class="fas fa-book-reader"></i>WorkDone</a>
        </li>
        <li>
            <form action="{{route('logout')}}" id="logoutForm" method="post">
                @csrf
                <a href="javascript:document.getElementById('logoutForm').submit();"><i class="fas fa-user"></i>Logout</a>
            </form>
        </li>
    </ul>
</nav>
<!-- .Sidebar left -->
<!-- Sidebar right -->
<nav id="sidebarright" class="sidenav">
    <div id="dismiss">
        <i class="fas fa-times"></i>
    </div>
    <div class="sidebar-header">
        <h3>Notifications</h3>
    </div>
    <ul class="right-menu">

        <li class="right-menu-item">
            <a href="#">
                <i class="fas fa-envelope"></i>
                <div class="ntitle">Your transaction was successful</div>
                <div class="desc">lorem ipsum dolor sit amet...</div>
            </a>
        </li>
        <li class="right-menu-item">
            <a href="#">
                <i class="fas fa-star"></i>
                <div class="ntitle">You have received an award</div>
                <div class="desc">lorem ipsum dolor sit amet...</div>
            </a>
        </li>
        <li class="right-menu-item">
            <a href="#">
                <i class="fas fa-car-alt"></i>
                <div class="ntitle">Your tour schedule</div>
                <div class="desc">lorem ipsum dolor sit amet...</div>
            </a>
        </li>
        <li class="right-menu-item">
            <a href="#">
                <i class="fas fa-ticket-alt"></i>
                <div class="ntitle">Promo offer for you today</div>
                <div class="desc">lorem ipsum dolor sit amet...</div>
            </a>
        </li>
        <li class="right-menu-item">
            <a href="#">
                <i class="fas fa-envelope"></i>
                <div class="ntitle">You get a point</div>
                <div class="desc">lorem ipsum dolor sit amet...</div>
            </a>
        </li>

    </ul>
</nav>
