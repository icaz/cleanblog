@extends('guest.layouts.app')

@section('hero')

        <!-- ********** Hero Area Start ********** -->
        <div class="hero-area height-500 bg-img background-overlay" style="background-image: url('{{ asset('user/img/blog-img/bg3.jpg')}}');">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="single-blog-title text-center">
                            <!-- Catagory -->
                            <img class="preloogo" src="{{ asset('user/img/core-img/logo-big.png')}}" alt="Logo">
                            <h3>Dajte predlog za kategorije</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ********** Hero Area End ********** -->
@endsection
@section('kategorije','active')


@section('content')
 <!-- ************** Content Area Start ************ -->   
 <section class="contact-area section-padding-50">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Contact Form Area -->
            <div class="col-12 col-md-10 col-lg-8">
                <div class="contact-form">
                    <h5 style="text-align:center"><i class="fa fa-list" aria-hidden="true"></i> Predložite kategoriju</h5>
                    <!-- Contact Form -->
                    <form action="{{ route('category') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="group">
                                    <input type="text" name="name" id="name" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Ime kategorije...</label>
                                <button type="submit" class="btn world-btn">Pošalji</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h5 style="text-align:center">Spisak predloženih kategorija</h5>
                        @foreach ($categories as $category)
                        <i class="fa fa-list" aria-hidden="true"></i> <small style="color:black">{{$category->name}}</small>&nbsp;&nbsp;&nbsp;
                        @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- ************** Content Area End ************ -->   

@endsection
