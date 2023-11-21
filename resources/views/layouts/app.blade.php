<!DOCTYPE html>
<html >
<!-- lang="en" -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
    <!-- <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Hadeer Emad">
    <meta name="robots" content="index/follow"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">

    <title>بلوبيز</title>
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png">

    <meta name="theme-color" content="#3941D1">
    <meta name="msapplication-navbutton-color" content="#3941D1">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3941D1">

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bluebies/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bluebies/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="bluebies/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bluebies/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="bluebies/css/style.css">
    <link rel="stylesheet" type="text/css" href="bluebies/css/style-ar.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
   
    <!--===============================
    LOADER
===================================-->

    <div class="pre-load">
        <img src="bluebies/images/loader.gif" alt="جاري التحميل ....">
    </div>
    <div id="app">
        <app-component></app-component>
    </div>



    <!--===============================
    FOOTER
===================================-->

    

    <!--===============================
    SCRIPT
===================================-->
<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>

    var firebaseConfig = {
        apiKey: "AIzaSyBOREN7KQCVDNvkpCTZcNBGKf1NvKs8PM4",
        authDomain: "laravel-push-notificatio-bd67c.firebaseapp.com",
        projectId: "laravel-push-notificatio-bd67c",
        storageBucket: "laravel-push-notificatio-bd67c.appspot.com",
        messagingSenderId: "820292628857",
        appId: "1:820292628857:web:039c5aa8c9799f4e2a7fa8",
        measurementId: "G-22G0LRE2SL"
    };

    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    function initFirebaseMessagingRegistration() {
            messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function(token) {
                console.log('Token is:',token);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: 'api/save-token',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token saved successfully.');
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err);
                    },
                });

            }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
     }

    messaging.onMessage(function(payload) {
        // console.log('inside function')
        const noteTitle = payload.notification.title;
        console.log(noteTitle)
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        console.log('before sending')
        new Notification(noteTitle, noteOptions);
        console.log('after sending')
    });

</script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="bluebies/js/jquery-3.4.1.min.js"></script>
    <script src="bluebies/js/popper.min.js"></script>
    <script src="bluebies/js/bootstrap.min.js"></script>
    <script src="bluebies/js/owl.carousel.min.js"></script>
    <script src="bluebies/js/mixitup.min.js"></script>
    <script src="bluebies/js/script.js"></script>

    <script>
        initFirebaseMessagingRegistration();
    </script>
</body>

</html>
