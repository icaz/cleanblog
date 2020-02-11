@extends('guest.layouts.app')

@section('hero')
       
        
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
                            <div class="single-slide d-flex align-items-center single-blog-post post-style-3 mt-50">
                                <div class="post-thumbnail">
                                    <img src="{{ asset('user/img/blog-img/b1.jpg')}}" alt="">
                                    <!-- Post Content -->
                                    <div class="post-content d-flex align-items-center justify-content-between">
                                        <!-- Catagory -->
                                        <div class="post-tag"><a href="#">travel</a></div>
                                        <!-- Headline -->
                                        <a href="#" class="headline">
                                            <h5>How Did van Gogh’s Turbulent</h5>
                                        </a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center single-blog-post post-style-3 mt-50">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('user/img/blog-img/b2.jpg')}}" alt="">
                                        <!-- Post Content -->
                                        <div class="post-content d-flex align-items-center justify-content-between">
                                            <!-- Catagory -->
                                            <div class="post-tag"><a href="#">travel</a></div>
                                            <!-- Headline -->
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent?</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Single Slide -->
                                    <div class="single-slide d-flex align-items-center single-blog-post post-style-3 mt-50">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('user/img/blog-img/b3.jpg')}}" alt="">
                                            <!-- Post Content -->
                                            <div class="post-content d-flex align-items-center justify-content-between">
                                                <!-- Catagory -->
                                                <div class="post-tag"><a href="#">travel</a></div>
                                                <!-- Headline -->
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide -->
                                    <div class="single-slide d-flex align-items-center single-blog-post post-style-3 mt-50">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('user/img/blog-img/b4.jpg')}}" alt="">
                                            <!-- Post Content -->
                                            <div class="post-content d-flex align-items-center justify-content-between">
                                                <!-- Catagory -->
                                                <div class="post-tag"><a href="#">travel</a></div>
                                                <!-- Headline -->
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********** Hero Area End ********** -->
    
        @endsection