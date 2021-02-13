<!doctype html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/plesir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:27:21 GMT -->
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
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick/slick-theme.css')}}">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('lib/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <!-- Font Awesome Free 5.10.2 CSS JS -->
    <link href="{{asset('lib/fontawesome-free-5.10.2-web/css/all.css')}}" rel="stylesheet">
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/brands.js')}}"></script>
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/solid.js')}}"></script>
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/fontawesome.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCm2jbUoX9T_MylOzVAaRiXKauyh2DXn_E"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>




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
        <div class="logo">Booking Details</div>
        <button type="button" id="sidebarrightbutton" class="btn">
            <div class="notif">
                <i class="fas fa-bell"></i>
                <i class="fas fa-circle "></i>
            </div>
        </button>
    </div>
</nav>
<style>
    #map{
        height: 200px;
    }
</style>
<!-- .Header  -->
<!-- Content  -->
<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <!-- slider -->

        <!-- .slider -->
@include('flash-message')
        <!-- section 1 -->
        <!-- .section 1 -->
        <!-- section 2 -->
        <div id="map">
        </div>
        <input type="hidden" id="destinationLat" value="{{$booking->destinationLat}}">
        <input type="hidden" id="destinationLng" value="{{$booking->destinationLng}}">
        <input type="hidden" id="originLat" value="{{$booking->originLat}}">
        <input type="hidden" id="originLng" value="{{$booking->originLng}}">
        <div class="content-wrap page-my-rides">
                <div class="subsite">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="badge badge-primary" style="position: absolute;right: 180px;font-size: 12px">{{$booking->distance}} km</span>
                            <div class="mr-car-box-wrap">
                                <div class="mr-car-box">
                                    <div class="mr-car-title">{{$booking->user->first_name}} {{$booking->user->last_name}}</div>
                                    <div class="cd"><b>0790268795</b></div>
                                    <div class="cd">{{$booking->type}}</div>
                                    <div class="mr-car-code">{{$booking->amount}}/=</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trip">
                                <div class="trip-left">
                                    <div class="tl-wrap">
                                        <div class="tl-location" id="startPoint">

                                        </div>
                                        <div class="tl-date">
                                            28 January 2025
                                        </div>
                                        <div class="tl-time">
                                            10.30AM
                                        </div>
                                    </div>
                                </div>
                                <div class="arrow">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                                <div class="trip-right">
                                    <div class="tl-wrap">
                                        <div class="tl-location" id="endPoint">

                                        </div>
                                        <div class="tl-date">
                                            28 January 2025
                                        </div>
                                        <div class="tl-time">
                                            8.30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-block btn-danger">Complete Trip</button>

                </div>


            </div>


        <!-- .section 2-->
        <!-- section 3 -->
        <!-- .section 4 -->

        <!-- SUBSCRIBE -->
        <!-- END SUBSCRIBE -->


    </div>
</div>
<!-- .Content  -->
<!-- Botom Panel  -->
@include('CarrierPartial.menu')
<!-- .Bottom Panel  -->

<div class="overlay"></div>

<!-- Optional JavaScript -->
<!-- jQuery v3.4.1 -->
<script src="{{asset('lib/jquery/jquery-3.4.1.min.js')}}"></script>
<!--  Bootstrap v4.3.1 JS -->
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{asset('lib/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset('lib/slick/slick/slick.min.js')}}"></script>
<!--  Custom JS -->
<script src="{{asset('js/theme.js')}}"></script>
<script>
    x = navigator.geolocation;
    x.getCurrentPosition(success, failure);
    function success(position){
        const geocoder = new google.maps.Geocoder();
        const infowindow = new google.maps.InfoWindow();
        var myLat = $('#originLat').val();
        var myLong = $('#originLng').val();
        var coords = (myLat + "," + myLong);
        var mapOptions = {
            zoom:20,
            center: coords,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        directionsService = new google.maps.DirectionsService();
        directionsDisplay = new google.maps.DirectionsRenderer();
        let destination =($('#destinationLat').val()+ "," + $('#destinationLng').val());
        let destination1 =(-1.0420115+ "," + 37.0234126);

        calcRoute(coords, destination);
        geocodeLatLng(geocoder,coords,infowindow)
        geocodeLatLngOne(geocoder,destination,infowindow)
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        directionsDisplay.setMap(map);
        new google.maps.Marker({
            position: destination1,
            map,
            title: "Hello World!",
        });


    }
    function failure(){}
    function calcRoute(start, destination){
        let request = {
            origin: start,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status === 'OK'){
                directionsDisplay.setDirections(response);

            }
            else {
                window.alert('Failed' + status);
            }

        })
    }
    function geocodeLatLng(geocode,coords,infowindow) {
        const input = coords;
        const latlngStr = input.split(",", 2);
        const latlng = {
            lat: parseFloat(latlngStr[0]),
            lng: parseFloat(latlngStr[1]),
        };
        geocode.geocode({ location: latlng }, (results, status) => {
            if (status === "OK") {
                if (results[0]) {
                    $('#startPoint').text(results[0].formatted_address);

                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });
    }
    function geocodeLatLngOne(geocode,destination,infowindow) {
        const input = destination;
        const latlngStr = input.split(",", 2);
        const latlng = {
            lat: parseFloat(latlngStr[0]),
            lng: parseFloat(latlngStr[1]),
        };
        geocode.geocode({ location: latlng }, (results, status) => {
            if (status === "OK") {
                if (results[0]) {
                    $('#endPoint').text(results[0].formatted_address);

                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });
    }

</script>

</body>

<!-- Mirrored from uidevr.com/tf/plesir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:37 GMT -->
</html>
