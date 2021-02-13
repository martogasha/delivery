<!doctype html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/plesir/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:29:12 GMT -->
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
<!-- .Sidebar left -->
<!-- Sidebar right -->
<!-- .Sidebar right-->
<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header">
    <div class="container-fluid">
        <div class="logo">Instant Delivery</div>
    </div>
</nav>
<!-- .Header  -->
<!-- Content  -->
<div id="content">
    <div class="content-wrap page-register">
        <div class="subsite-banner">
            <img src="img/subsite-banner.jpg">
        </div>
        <div class="subsite subsite-with-banner">
            <div class="row">
                <div class="col-md-12">
                    <div class="subsite-heading">
                        Create Account
                    </div>
                  @include('flash-message')
                </div>
            </div>
            <form class="form-group" action="{{route('Register')}}" method="post">
                @csrf
                <div class="row field-row">
                    <div class="col no-padding-right">
                        <label>First name</label>
                        <div class="field-group">
                            <i class="fas fa-user"></i>
                            <input type="text" name="first_name" class="form-control with-icon" >
                        </div>
                    </div>
                    <div class="col">
                        <label>Last name</label>
                        <div class="field-group">
                            <input type="text" name="last_name" class="form-control"  >
                        </div>
                    </div>
                </div>
                <div class="row field-row">
                    <div class="col">
                        <label>Idno</label>
                        <div class="field-group">
                            <i class="fas fa-user-circle"></i>
                            <input type="text" name="idno" class="form-control with-icon"   >
                        </div>
                    </div>
                </div>

                <div class="row field-row">
                    <div class="col">
                        <label>Phone</label>
                        <div class="field-group">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="phone" class="form-control with-icon" >
                            <input type="hidden" name="role" value="0">
                        </div>
                    </div>
                </div>
                <div class="row field-row">
                    <div class="col">
                        <label>Password</label>
                        <div class="field-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" class="form-control with-icon" >
                        </div>
                    </div>
                </div>
                <div class="row field-row">
                    <div class="col">
                        <label>Confirm Password</label>
                        <div class="field-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="form-control with-icon" >
                        </div>
                    </div>
                </div>
                <div class="row field-row register-submit">
                    <div class="col">
                        <div class="button">
                            <button type="submit" class="theme-button">Create Account</button>
                        </div>
                    </div>
                </div>
                <div class="row field-row have-a-account">
                    <div class="col">
                        <div class="field-group">
                            Already have a account? <a href="{{url('Login')}}"> Login </a>
                        </div>
                        <br>
                        <div class="field-group">
                            Want to become a carrier? <a href="{{url('carrierRegister')}}"> REGISTER </a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row field-row have-a-account">
                <div class="col">
                    <div class="field-group">
                        By signing up, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<!-- .Content  -->
<!-- Botom Panel  -->
<div class="bottom-panel">
    <div class="bp-col">
        <a href="index.html">
            <div class="bp-icon"><img src="img/iphome.png" alt="icon"> </div>
            <div class="bp-text">Home</div>
        </a>
    </div>
    <div class="bp-col">
        <a href="my_rides.html">
            <div class="bp-icon"><img src="img/ipcar.png" alt="icon"></div>
            <div class="bp-text">My Rides</div>
        </a>
    </div>
    <div class="bp-col">
        <a href="destinations.html">
            <div class="bp-icon"><img src="img/ipoffer2.png" alt="icon"></div>
            <div class="bp-text">Offers</div>
        </a>
    </div>
    <div class="bp-col">
        <a href="setting.html">
            <div class="bp-icon"><img src="img/ipaccount.png" alt="icon"></div>
            <div class="bp-text">Account</div>
        </a>
    </div>
</div>
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

<!-- Mirrored from uidevr.com/tf/plesir/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:29:12 GMT -->
</html>
