<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
     <link href="http://localhost:8000/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost:8000/css/profile.css" rel="stylesheet">

    <!-- Owl carusel 2 (exercises) -->
    <link rel="stylesheet" href="http://localhost:8000/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost:8000/owlcarousel/css/owl.theme.default.min.css">

    <!-- Custom Fonts -->
    <link href="{{ URL::to('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="http://localhost:8000/css/agency.min.css" rel="stylesheet">

 <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>

    <div id="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #222;" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ route('index') }}">I-learning</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto nav-active">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" style="font-size: 100%;" href="">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" style="font-size: 100%;" href="/lessons_group">Курси</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" style="font-size: 100%;" href="">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" style="font-size: 100%;" href="">Team</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto navbar-right nav-active">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a href="{{ route('login') }}">Log in</a></li>
                            <li class="nav-item"><a href="{{ route('register') }}">Registration</a></li>
                        @else
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-togglenav-link js-scroll-trigger" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
              </div>
            </nav>
    
        
    </div>
    <!-- /#wrapper -->
    <div class="stub"></div>
    @yield('content')
    
    <!-- jQuery -->
    <script src="http://localhost:8000/js/jquery/jquery.min.js"></script>
    <!-- Owl carusel 2 -->
    <script src="http://localhost:8000/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="http://localhost:8000/owlcarousel/js/my_owl.js"></script>

    <script src="http://localhost:8000/js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost:8000/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="http://localhost:8000/js/jqBootstrapValidation.js"></script>
    <script src="http://localhost:8000/js/contact_me.js"></script>
    

    <!-- Custom scripts for this template -->
    <script src="http://localhost:8000/js/agency.min.js"></script>
    
    <script src="{{ URL::to('src/js/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    
    <script src="{{ URL::to('js/i-learning.js') }}"></script>  

</body>

</html>

