@extends('layouts.wrapper')
@section('title')
    <title>UStore</title>
@endsection
@section('content')
    <!-- slider Area Start -->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets/img/hero/hero_man.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets/img/hero/hero_man.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Category Area Start-->
    <section class="category-area section-padding30">
        <div class="container-fluid">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-85">
                        <h2>Shop by Category</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img">
                            <img src="assets/img/categori/cat1.jpg" alt="">
                            <div class="category-caption">
                                <h2>Owmen`s</h2>
                                <span class="best"><a href="#">Best New Deals</a></span>
                                <span class="collection">New Collection</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img text-center">
                            <img src="assets/img/categori/cat2.jpg" alt="">
                            <div class="category-caption">
                                <span class="collection">Discount!</span>
                                <h2>Winter Cloth</h2>
                                <p>New Collection</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img">
                            <img src="assets/img/categori/cat3.jpg" alt="">
                            <div class="category-caption">
                                <h2>Man`s Cloth</h2>
                                <span class="best"><a href="#">Best New Deals</a></span>
                                <span class="collection">New Collection</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Area End-->

    <!-- Latest Products Start -->
    <section class="latest-product-area padding-bottom">
        <div class="container">
            <div class="row product-btn d-flex justify-content-end align-items-end">
                <!-- Section Tittle -->
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="section-tittle mb-30">
                        <h2>Latest Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="properties__button f-right">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card foure -->
                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->

    <!-- Best Product Start -->
    <div class="best-product-area lf-padding" >
        <div class="product-wrapper bg-height" style="background-image: url('assets/img/categori/card.png')">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-end">
                    <div class="product-man position-absolute  d-none d-lg-block">
                        <img src="assets/img/categori/card-man.png" alt="">
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="vertical-text">
                            <span>Manz</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="best-product-caption">
                            <h2>Find The Best Product<br> from Our Shop</h2>
                            <p>Designers who are interesten creating state ofthe.</p>
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape bounce-animate d-none d-md-block">
            <img src="assets/img/categori/card-shape.png" alt="">
        </div>
    </div>
    <!-- Best Product End-->


    <!-- Shop Method Start-->
    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-package"></i>
                        <h6>Free Shipping Method</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-unlock"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-reload"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->

    <!-- Gallery Start-->
    <div class="gallery-wrapper lf-padding">
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="gallery-items">
                        <img src="assets/img/gallery/gallery1.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="assets/img/gallery/gallery2.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="assets/img/gallery/gallery3.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="assets/img/gallery/gallery4.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="assets/img/gallery/gallery5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End-->
@endsection
