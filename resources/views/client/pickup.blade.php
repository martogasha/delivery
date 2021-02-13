<!doctype html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/plesir/book_a_car.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:37 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Plesir - Car & Travel Mobile Template </title>
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
        <div class="logo">Motorcycle Booking</div>
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
    <div class="content-wrap">

        <div class="subsite-banner">
            <img src="img/subsite-banner.jpg">
        </div>
        <div class="subsite subsite-with-banner">

            <div class="row">
                <div class="col-md-12">
                    <div class="subsite-heading">
                        Book a Motorcycle
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-layout">
                        <form action="{{route('booking')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="first_name" aria-describedby="emailHelp" value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="last_name" aria-describedby="emailHelp" value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Weight (Kg) <b>Optional</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="weight" aria-describedby="emailHelp" placeholder="Enter Weight in Kilograms">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlFile1">Picture of item</label>
                                    <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="note">Brief Description of item</label>
                                    <div class="input-group">
                                        <textarea class="form-control" name="description" aria-label="note"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Your Destination:</label>
                                    <input type="text" class="form-control" id="destination" placeholder="Type destination address..." />
                                    <input type="hidden" id="destinationLat" name="destinationLat">
                                    <input type="hidden" id="destinationLng" name="destinationLng">
                                    <input type="hidden" id="originLat" name="originLat" value="{{\Illuminate\Support\Facades\Auth::user()->originLat}}">
                                    <input type="hidden" id="originLng" name="originLng" value="{{\Illuminate\Support\Facades\Auth::user()->originLng}}">
                                    <input type="hidden" name="type" value="pickup">
                                    <span class="badge badge-primary" id="distance"></span>km <b>From Source</b>
                                    <input type="hidden" name="distance" id="distance_one">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">Total Price:</label>
                                    <input type="text" name="totalPrice" class="form-control" id="totalPrice">
                                </div>

                                <div class="form-group col-md-12">
                                    <br>
                                    <div class="button">
                                        <button type="submit" class="theme-button">Book Now</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <input type="hidden" id="originLat" value="{{$user->originLat}}">
            <input type="hidden" id="originLng" value="{{$user->originLng}}">



        </div>
    </div>
</div>
<!-- .Content  -->
<!-- Botom Panel  -->
@include('ClientPartial.menu')<!-- .Bottom Panel  -->
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
<!--  Time Picker -->
<script type="text/javascript" src="lib/bootstrap-timepicker/bootstrap-timepicker.js"></script>
<!--  Custom JS -->
<script src="js/theme.js"></script>
</body>
<script>
    var searchInput = 'destination';

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
            $('#destinationLat').val(from_lat);
            $('#destinationLng').val(from_long);
            var origin = ($('#originLat').val() + "," + $('#originLng').val());
            var destination = (from_lat + "," + from_long);



            $.ajax({
                type:"get",
                url:"{{url('calculateDistance')}}",
                data:{'origin':origin, 'destination':destination},
                success:function (data) {
                    $('#distance').text(data);
                    $('#distance_one').val(data);
                    $('#totalPrice').val(data*35);

                },
                error:function (error) {
                    console.log(error)
                    alert('error')

                }

            });
        });
    });
</script>
<!-- Mirrored from uidevr.com/tf/plesir/book_a_car.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:39 GMT -->
</html>
