<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Title  -->
        <title>u.nišu.rs</title>
    
        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('user/img/core-img/favicon.ico')}}">
    
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('user/style.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css')}}">
  <!-- Theme style -->

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    
    </head>
<body>
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('user/img/core-img/logo-solo.png')}}" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kategorije') }}">Kategorije</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tagovi') }}">Tagovi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('e-mail_list') }}">e-Mail lista</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kontakt') }}">Kontakt</a>
                                </li>

                                @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Login</a>
                                </li>
            
                                @endauth
        

                                <!-- LOGIN PART
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Login <i class="fa fa-user-circle"></i></a>
                                </li>
                                -->
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Traži...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
        
   
        
        
        <!-- ********** Hero Area Start ********** -->
        <div class="hero-area">

            <!-- Hero Slides Area -->
            <div class="hero-slides owl-carousel">
                <!-- Single Slide -->
                <div class="single-hero-slide bg-img background-overlay" style="background-image: url('{{ asset('user/img/blog-img/bg1.jpg')}}');"></div>
                <!-- Single Slide -->
                <div class="single-hero-slide bg-img background-overlay" style="background-image: url('{{ asset('user/img/blog-img/bg2.jpg')}}');"></div>
                <!-- Single Slide -->
                <div class="single-hero-slide bg-img background-overlay" style="background-image: url('{{ asset('user/img/blog-img/bg3.jpg')}}');"></div>
            </div>
    
            <!-- Hero Post Slide -->
            <div class="hero-post-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-post-slide">


                                
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>1</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="kategorije.php">Dajte predloge za kategorije...</a>
                                    </div>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>2</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="tagovi.php">Dodajte tagove za blog...</a>
                                    </div>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>3</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="#email2">Prijavite se na e-Mail listu...</a>
                                    </div>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>4</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="kontakt.php">Kontaktirajte nas sa vašim predlozima...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********** Hero Area End ********** -->
    
    
        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="footer-single-widget">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('user/img/core-img/logo-solo2.png')}}" alt=""></a>
                            <div class="copywrite-text mt-30">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="footer-single-widget">
                            <ul class="footer-menu d-flex justify-content-between">
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="footer-single-widget">
                            <h5>Prijavite se</h5>
                            <form action="{{ route('email') }}" method="post">
                                @csrf
                                <input type="email" name="email" id="email" placeholder="Unesite mail" required>
                                <button type="submit"><i class="fa fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ***** Footer Area End ***** -->
        <button type="button" class="btn btn-success swalDefaultSuccess">
            Launch Success Toast
          </button>   
        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="{{ asset('user/js/jquery/jquery-2.2.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{ asset('user/js/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
        <!-- Plugins js -->
        <script src="{{ asset('user/js/plugins.js')}}"></script>
        <!-- Active js -->
        <script src="{{ asset('user/js/active.js')}}"></script>

        <script src="{{ asset('admin/plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>


<script>
$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
});

  </script>
    </body>
</html>
