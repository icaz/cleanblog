@extends('guest.layouts.app')

@section('hero')

<!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-300 bg-img background-overlay" style="background-image: url('{{ asset('user/img/blog-img/bg1.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <h3>Prijavite se na e-Mail listu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

@endsection
@section('email','active')
@section('content')
 <!-- ************** Content Area Start ************ -->   
        <section class="contact-area section-padding-50">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Contact Form Area -->
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="contact-form">
                            <h5>Prijava</h5>
                            <!-- Contact Form -->
                            <form action="{{ route('email') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="text" name="name" id="name" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Uneste svoje ime</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="email" name="email" id="email" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Unesite email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="group">
                                            <textarea name="notes" id="message" required></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Nešto zanimljivo</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn world-btn">Prijavi se</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <!-- ************** Content Area End ************ -->   
 @endsection


