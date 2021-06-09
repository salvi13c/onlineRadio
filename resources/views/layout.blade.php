<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online radio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/radioplayer.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}"/>
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script>
        // Initialize Firebase
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyD-ZUz2sVZe9628S5-XuEDF8hRnd3oGXsc",
            authDomain: "onlineradioauth.firebaseapp.com",
            projectId: "onlineradioauth",
            storageBucket: "onlineradioauth.appspot.com",
            messagingSenderId: "569875263818",
            appId: "1:569875263818:web:ae0a731115252e80e091b3",
            measurementId: "G-J8TJ60S3C7"
        };
        firebase.initializeApp(firebaseConfig);
    </script>
    <script src="{{ asset('/js/login.js') }}"></script>
    <script src="{{ asset('/js/dbcrud.js') }}"></script>
</head>
<header>
    @include('header')
</header>
<body>
    <div class="container" id="content">
        @yield('content')
    </div>
</body>
<footer id="mainFooter">
    @include('footer')
</footer>
</html>
