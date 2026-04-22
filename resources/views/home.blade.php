@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="py-lg-8 pt-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-12">
                <div class="swiper-container swiper swiper-pagination-light" id="swiper-6" data-speed="800" data-space-between="100" data-pagination="true" data-navigation="true" data-autoplay="true" data-effect="slide" data-autoplay-delay="3000">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-md-8">
                            <div class="position-relative text-center">
                                <img src="{{ asset('images/slider/slider-img-2.png') }}" alt="" class="img-fluid my-5 my-lg-0">
                                <div class="text-center position-absolute top-0 start-0 px-lg-11">
                                    <h1 class="fs-1 fst-italic text-secondary">%20 Sell</h1>
                                    <h2 class="display-4 lh-1">Comfy Sofa Home-Office</h2>
                                </div>
                                <div class="position-absolute top-md-65 top-75 start-50 translate-middle-x mt-lg-9">
                                    <p class="d-none d-lg-block">Comfortable and stylish sofa for your home office.</p>
                                    <a href="{{ route('products.index') }}" class="btn btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-lg-10 py-5">
    <div class="container">
        <div class="row justify-content-center mx-lg-10">
            <div class="col-lg-8 text-center">
                <h2 class="mb-5">Subscribe to our Newsletter</h2>
                <form class="d-flex justify-content-center gap-2 flex-column flex-sm-row">
                    <input type="email" class="form-control w-lg-50 w-100" placeholder="Enter your email" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection