@extends('guest.layouts.app')

@section('hero')

        <!-- ********** Hero Area Start ********** -->
        <div class="hero-area height-300 bg-img background-overlay" style="background-image: url('{{ asset('user/img/blog-img/bg3.jpg')}}');">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="single-blog-title text-center">
                            <!-- Catagory -->
                            <h3>Dajte predlog za tagove</h3>
                            <h3>koje možete koristiti</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ********** Hero Area End ********** -->
@endsection
@section('tagovi','active')

@section('tag-list')

<div class="regular-page-wrap section-padding-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="page-content">
                    <h2>Spisak predloženih tagova</h2>
<h6>
@foreach ($tags as $tag)

<i class="fas fa-hashtag" aria-hidden="true"></i> {{$tag->name}}
@endforeach
</h6>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@section('content')
 <!-- ************** Content Area Start ************ -->   
 <section class="contact-area section-padding-50">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Contact Form Area -->
            <div class="col-12 col-md-10 col-lg-8">

                <div class="contact-form">
                    <h5 style="text-align:center"><i class="fas fa-hashtag" aria-hidden="true"></i> Predložite tag</h5>
                    <!-- Contact Form -->
                    <form action="{{ route('tag') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="group">
                                    <input type="text" name="name" id="name" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label><ion-icon name="pricetag"></ion-icon> Tag...</label>
                                <button type="submit" class="btn world-btn">Pošalji</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h5 style="text-align:center">Spisak predloženih tagova</h5>
                        @foreach ($tags as $tag)
                        <i class="fas fa-hashtag" aria-hidden="true"></i> <small style="color:black">{{$tag->name}}</small>&nbsp;&nbsp;&nbsp;
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- ************** Content Area End ************ -->   

@endsection
