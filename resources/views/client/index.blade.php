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
    <script defer src="lib/fontawesome-free-5.10.2-web/js/brands.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/solid.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/fontawesome.js"></script>
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
@include('ClientPartial.navbar')
<!-- .Sidebar right-->
<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header">
    <div class="container-fluid">

        <button type="button" id="sidebarleftbutton" class="btn">
            <i class="fas fa-align-left"></i>
        </button>
        <div class="logo">DASHBOARD</div>
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
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <!-- slider -->
        <div class="img-hero">
            <div>
                <img src="img/slide1.jpg" alt="slider">
            </div>
            <div>
                <img src="img/slide2.jpg" alt="slider">
            </div>
        </div>
        <!-- .slider -->

        <!-- section 1 -->
        <div class="home-icon">
            <div class="section-home">
                <div class="container">
                    <div class="form-group">
                        <label>Your Location:</label>
                        <input type="text" class="form-control" name="from" id="search_input" placeholder="Type address..." />
                        <input type="hidden" id="originLat" name="originLat">
                        <input type="hidden" id="originLng" name="originLng">
                    </div>
                    <div class="row">
                        <div class="col s-icon">
                            <a href="{{url('book')}}" class="homepage-icon-menu">
                                <img src="img/motorcycle.jpg" alt="icon">
                                <div class="s-icon-text">
                                    MOTORCYCLE
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{url('pickup')}}" class="homepage-icon-menu">
                                <img src="img/pickup.jpg" alt="icon">
                                <div class="s-icon-text">
                                    PICKUP
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{url('lorry')}}" class="homepage-icon-menu">
                                <img src="img/lorry1.jpg" alt="icon">
                                <div class="s-icon-text">
                                    LORRY
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{url('trans')}}" class="homepage-icon-menu">
                                <img src="img/transist.jpg" alt="icon">
                                <div class="s-icon-text">
                                    TRANSIST
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .section 1 -->
        <!-- section 2 -->

        <!-- END SUBSCRIBE -->


    </div>
</div>
<input type="hidden" id="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
<!-- .Content  -->
<!-- Botom Panel  -->
@include('ClientPartial.menu')
<!-- .Bottom Panel  -->
<!-- Modal -->


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
<!--  Custom JS -->
<script src="js/theme.js"></script>

</body>
<script type="text/javascript">
    $(document).ready(function () {
        x = navigator.geolocation;
        x.getCurrentPosition(success, failure);
        function success(position){
            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();
            var myLat = position.coords.latitude;
            var myLong = position.coords.longitude;
            var coords = (myLat + "," + myLong);
            var origin = (-1.2840302 + "," + 36.8232677);
            geocodeLatLng(geocoder,coords,infowindow);
            $value = origin;
            $value1 = coords;

        }
        function failure(){}
    });

    var searchInput = 'search_input';

    $(document).ready(function () {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
            types: ['geocode'],
            /*componentRestrictions: {
             country: "USA"
            }*/
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var near_place = autocomplete.getPlace();
            var from_lat = near_place.geometry.location.lat();
            var from_long = near_place.geometry.location.lng();
            var from_address = (from_lat + "," + from_long);
            $('#originLat').val(from_lat);
            $('#originLng').val(from_long);

            var origin = (-1.2004731 + "," + 36.6424744);
            $value = origin;
            $value1 = from_address;


        });
    });
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
                    $('#search_input').val(results[0].formatted_address);
                    $('#originLat').val(results[0].geometry.location.lat);
                    $('#originLng').val(results[0].geometry.location.lng);
                    $value = results[0].geometry.location.lat;
                    $value1 = results[0].geometry.location.lng;
                    $value2 = $('#user_id').val();
                    $.ajax({
                        type:"get",
                        url:"{{url('userLocation')}}",
                        data:{'lat':$value,'lng':$value1,'user_id':$value2},
                        success:function (data) {
                            alert('Location Saved');
                        },
                        error:function (error) {
                            console.log(error)
                            alert('error')

                        }

                    });


                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });
    }

</script>


<!-- Mirrored from uidevr.com/tf/plesir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:37 GMT -->
</html>
