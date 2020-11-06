<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="es"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<head>
    <!-- Meta Tags -->
    @include('common.meta', get_defined_vars())

    <!-- Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>    
    <link rel="stylesheet" href="{{ asset('style/fonts.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('style/custom.css') }}">    
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" src="{{ asset('images/mypostcardlogo-en.png') }}"/></a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid">
        @section('content')
        <div class="row">
            <div class="col-12">
                <h1>Send your photos as real postcards worldwide</h1>
                <p>Create and send your own personalized photo postcards and greeting cards online, or download the free postcard app to send cards on the go wherever you are.</p>            
            </div>
        </div>        
        @show
    </div>
    

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
                <li class="list-inline-item">
                    <a href="#">About us</a></li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="#">Products</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="#">My account</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="#">Business</a>
                </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; @yield('footer', 'Your Website 2020. All Rights Reserved.')</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mr-3">
                <a href="http://facebook.com/mypostcard.global" target="_blank">
                    <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
                </li>
                <li class="list-inline-item mr-3">
                <a href="http://twitter.com/MyPostcardapp" target="_blank">
                    <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="https://www.instagram.com/mypostcardapp/" target="_blank">
                    <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </footer>    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
</body>
</html>