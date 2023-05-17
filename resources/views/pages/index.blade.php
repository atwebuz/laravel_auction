@extends('layouts.app')

@section('content')
<div class="container">
    <div class="slider">
        <div class="container">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <h3 class="text-light">Shaxsiy hisob qanday to`ldiriladi</h3>
                        <p class="text-light">shaxsiy hisobvaraqni toʼldirish uchun, shaxsiy kabinet orqali “Hisobni toʼldirish” yoki “Yordam” boʼlimida batafsil tanishish mumkin </p>
                </div>
                <div class="carousel-item">
                    <h3 class="text-light">Shaxsiy hisobdan pul qanday qaytariladi?

                    </h3>
                    <p class="text-light">shaxsiy hisobvaraqdan pul qaytarish uchun, shaxsiy kabinet orqali “Pulni qaytarish” yoki “Yordam” boʼlimida batafsil tanishish mumkin.

                    </p>
            </div>
                <div class="carousel-item">
                    <h3 class="text-light">Lotga qanday ariza beriladi?

                    </h3>
                    <p class="text-light">Elektron savdolarda ishtirok etishda, lotga ariza berish yuzasidan batafsil “Yordam” boʼlimida tanishish mumkin.

                    </p>
            </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>

    <div class="bids_show">
        <div class="bids_show_box">
            <h3 class="text-light">Joriy Auksionlar</h3>
            <h2>0</h2>
        </div>

        <div class="bids_show_box">
            <h3 class="text-light">O'tkazilgan Auksionlar</h3>
            <h2>0</h2>
        </div>

        <div class="bids_show_box">
            <h3 class="text-light">Yakunlangan Auksionlar</h3>
            <h2>0</h2>
        </div>

        <div class="bids_show_box">
            <h3 class="text-light">Barcha Auksionlar</h3>
            <h2>0</h2>
        </div>
    </div>

    <div class="products">
        <div class="products_block">
            @foreach($products as $product)
            <div class="card">
                {{-- @dd($products) --}}
                <a href="{{route('products.show',$product->id)}}">
                    {{-- @dd($product->oneimage[0]->images) --}}
                    <img class="img-fluid" src="{{count($product->oneimage)==1 ? asset('image/' . $product->oneimage[0]->images) : asset('image/no-image.avif')}}" alt="image not-found" />
                    {{-- <img class="img-fluid" src="{{count($product->oneimage)==1 ? asset('image/' . $product->oneimage[0]->images) : asset('assets/images/no-image.png')}}" alt="image not-found" /> --}}

                    {{-- <img src="{{asset('no-image.avif')}}" class="card-img-top" alt="..."> --}}
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->paragraph}}</p>
                    <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>     
            @endforeach

                           
        </div>
    </div>
</div>
@endsection
