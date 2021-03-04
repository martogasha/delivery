<!doctype html>
<html lang="en">


<!-- Mirrored from mobilekit.bragherstudio.com/view7/page-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:21:40 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Messaging</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/192x192.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="manifest" href="{{asset('__manifest.json')}}">
</head>

<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="{{url('carrierDirection',$booking->id)}}" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">{{$booking->user->first_name}} {{$booking->user->last_name}}</div>
    <div class="right">
        <a href="javascript:;" class="headerButton">
            <ion-icon name="videocam-outline"></ion-icon>
        </a>
        <a href="javascript:;" class="headerButton">
            <ion-icon name="call-outline"></ion-icon>
            <span class="badge badge-danger">1</span>
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="message-divider">
        Friday, Sep 20, 10:40 AM
    </div>
@foreach($messages as $message)
    <div class="{{($message->from == \Illuminate\Support\Facades\Auth::id()) ? 'message-item' : 'message-item user'}}">
        <img src="{{asset('assets/img/sample/avatar/avatar1.jpg')}}" alt="avatar" class="avatar">
        <div class="content">
            <div class="title">John</div>
            <div class="bubble">
                Hi everyone, how are you?
            </div>
            <div class="footer">8:40 AM</div>
        </div>
    </div>
    @endforeach

</div>
<!-- * App Capsule -->

<!-- Share Action Sheet -->
<div class="modal fade action-sheet inset" id="addActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Share</h5>
            </div>
            <div class="modal-body">
                <ul class="action-button-list">
                    <li>
                        <a href="#" class="btn btn-list" data-dismiss="modal">
                                <span>
                                    <ion-icon name="camera-outline"></ion-icon>
                                    Take a photo
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-dismiss="modal">
                                <span>
                                    <ion-icon name="videocam-outline"></ion-icon>
                                    Video
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-dismiss="modal">
                                <span>
                                    <ion-icon name="image-outline"></ion-icon>
                                    Upload from Gallery
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-dismiss="modal">
                                <span>
                                    <ion-icon name="document-outline"></ion-icon>
                                    Documents
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-dismiss="modal">
                                <span>
                                    <ion-icon name="musical-notes-outline"></ion-icon>
                                    Sound file
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- * Share Action Sheet -->

<!-- chat footer -->
<div class="chatFooter">
        <a href="javascript:;" class="btn btn-icon btn-secondary rounded" data-toggle="modal" data-target="#addActionSheet">
            <ion-icon name="add"></ion-icon>
        </a>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <input type="text" class="form-control" name="message" id="sendMessage" placeholder="Type a message...">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
        </div>
        <button type="button" class="btn btn-icon btn-primary rounded">
            <ion-icon name="send"></ion-icon>
        </button>
    <input type="hidden" id="receiver_id" value="{{$booking->user_id}}">
</div>
<!-- * chat footer -->

<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="{{asset('assets/js/lib/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap-->
<script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
<script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<!-- jQuery Circle Progress -->
<script src="{{asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
<!-- Base Js File -->
<script src="{{asset('assets/js/base.js')}}"></script>


</body>

<!-- Mirrored from mobilekit.bragherstudio.com/view7/page-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:21:42 GMT -->
</html>
