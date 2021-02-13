<!doctype html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/plesir/car_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:44 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Plesir - Car & Travel Mobile Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap v4.3.1 CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/theme.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
    <!-- Font Awesome Free 5.10.2 CSS JS -->
    <link href="lib/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet">
    <script defer src="lib/fontawesome-free-5.10.2-web/js/brands.min.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/solid.min.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/regular.min.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/fontawesome.min.js"></script>
    <!-- Date picker -->
    <link href="lib/gijgo/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="default">
<!-- Preloading -->
<div class="preloading">
    <div class="wrap-preload">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- .Preloading -->
<!-- Sidebar left -->
@include('CarrierPartial.navbar')
<!-- .Sidebar right-->
<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header">
    <div class="container-fluid">
        <button type="button" id="sidebarleftbutton" class="btn">
            <i class="fas fa-align-left"></i>
        </button>
        <div class="logo">Carrier Dashboard</div>
        <button type="button" id="sidebarrightbutton" class="btn">
            <div class="notif">
                <i class="fas fa-bell"></i>
                <i class="fas fa-circle "></i>
            </div>
        </button>
    </div>
</nav>
<!-- .Header  -->
<!-- Content  -->
<div id="content">
    <div class="content-wrap page-car-list">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="subsite-heading">
                    Available Requests
                    </div>
                </div>
            </div>
            @foreach($bookings as $booking)
            <div class="row car-row">
                <div class="col-md-12">
                    <div class="car-card">
                        <div class="cc-left">
                            <div class="ccl-img">
                                <img src="{{asset('uploads/product/'.$booking->picture)}}" alt="car">
                            </div>
                            <div class="ccl-text">
                                <span class="badge badge-success">Paid</span>

                            </div>
                        </div>
                        <div class="cc-right">
                            <div class="ccr-row-a">{{$booking->user->first_name}} {{$booking->user->last_name}}</div>
                            <div class="ccr-row-b">fragile</div>
                            <div class="ccr-row-c">from <b>Kikuyu</b></div>
                            <div class="ccr-row-c">to <b>Kitengela</b></div>
                            <div class="ccr-row-d">{{$booking->distance}} Km</div>
                            <div class="ccr-row-e"><span>{{$booking->amount}}/=</span></div>
                        </div>
                        @if($booking->carrier==null)
                        <a href="{{url('carrierDirection',$booking->id)}}"><button class="btn btn-info">Take Request</button></a>
                        @else
                            <a href="{{url('carrierDirection',$booking->id)}}"><button class="btn btn-success">View Request</button></a>

                        @endif
                    </div>
                </div>
            </div>
            @endforeach

            <div class="row car-row pagination-row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- .Content  -->
<!-- Botom Panel  -->
@include('CarrierPartial.menu')
<!-- .Bottom Panel  -->
<div class="overlay"></div>
<!-- Optional JavaScript -->
<!-- jQuery v3.4.1 -->
<script src="lib/jquery/jquery-3.4.1.min.js"></script>
<!--  Bootstrap v4.3.1 JS -->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="lib/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
<!-- Slick JS -->
<script src="lib/slick/slick/slick.min.js"></script>
<!--  Date Picker -->
<script src="lib/gijgo/js/gijgo.min.js" type="text/javascript"></script>
<!--  Custom JS -->
<script src="js/theme.js"></script>
</body>

<!-- Mirrored from uidevr.com/tf/plesir/car_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:57 GMT -->
</html>
