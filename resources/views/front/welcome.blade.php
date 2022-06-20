
@extends('layouts.app')
@section('page', 'Home')
@section('content')
    <section class="banner">
        <div class="container-fluid pe-lg-0">
            <div class="row m-0">
                <div class="swiper bannerSwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href=""><img src="./img/card1.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card2.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card3.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card4.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card1.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card2.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card3.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card4.jpg"></a></div>
                    <div class="swiper-slide"><a href=""><img src="./img/card3.jpg"></a></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!--end_banner-->

    <section class="py-4">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <!-- <div class="col-12 col-lg-3 mb-3 mb-lg-0"><img src="./img/google_ret.jpg" class="w-100"></div> -->
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="devl_logo">
                        <img src="./img/free_delivery.png" width="50px">
                        <h6>Fast Delivery Options <small>Lorem Ipsum is simply dummy text</small></h6>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="devl_logo">
                        <img src="./img/store_pickup.png" width="50px">
                        <h6>Store Pickup <small>Lorem Ipsum is simply dummy text</small></h6>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="devl_logo">
                        <img src="./img/order_via_whatssap.png" width="50px">
                        <h6>Order Via WhatsApp <small>Lorem Ipsum is simply dummy text</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_item ">
        <div class="container">
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page-title">
                    <h5>Popular <span>Products</span></h5>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/business-cards.png">
                            </div>
                            <h6>Business Cards</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/button-badges.png">
                            </div>
                            <h6>Button Badges</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/flayers.png">
                            </div>
                            <h6>Flyers</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/labels.png">
                            </div>
                            <h6>Labels</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/notebooks.png">
                            </div>
                            <h6>Notebooks</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/poly-bags.png">
                            </div>
                            <h6>Courier Poly Bags</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/booklets.png">
                            </div>
                            <h6>Booklets</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/tshirts.png">
                            </div>
                            <h6>T-Shirts</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end_popular_products-->

    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <div class="col-12 col-lg-10">
                    <img src="./img/image.png" class="w-100">
                </div>
            </div>
        </div>
    </section><!--end_add_banner-->

    <section class="product_item py-4">
        <div class="container">
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page-title">
                    <h5>New <span>Launches</span></h5>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                    <a href="javascript:void(0);">
                        <div class="nw_launch">
                            <div class="nl_text">
                                <h6>Lorem Ipsum is simply</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <div class="ln_image">
                                <img src="./img/1.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                    <a href="javascript:void(0);">
                        <div class="nw_launch">
                            <div class="nl_text">
                                <h6>Lorem Ipsum is simply</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <div class="ln_image">
                                <img src="./img/2.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                    <a href="javascript:void(0);">
                        <div class="nw_launch">
                            <div class="nl_text">
                                <h6>Lorem Ipsum is simply</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <div class="ln_image">
                                <img src="./img/3.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                    <a href="javascript:void(0);">
                        <div class="nw_launch">
                            <div class="nl_text">
                                <h6>Lorem Ipsum is simply</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <div class="ln_image">
                                <img src="./img/4.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                    <a href="javascript:void(0);">
                        <div class="nw_launch">
                            <div class="nl_text">
                                <h6>Lorem Ipsum is simply</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <div class="ln_image">
                                <img src="./img/5.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                    <a href="javascript:void(0);">
                        <div class="nw_launch">
                            <div class="nl_text">
                                <h6>Lorem Ipsum is simply</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <div class="ln_image">
                                <img src="./img/6.png">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end_New_Launches-->

    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <div class="col-12 p-0 col-lg-10">
                    <img src="./img/banner_b1.jpg" class="w-100">
                </div>
            </div>
        </div>
    </section><!--end_add_banner-->

    <section class="product_item py-4">
        <div class="container">
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page-title">
                    <h5>Trending</h5>
                </div>
            </div>
            <div class="row m-0 mb-0 mb-lg-4 trend_sec">
                <div class="col-12 col-lg-6 mb-3">
                    <a href="javascript:void(0);"></a>
                    <div class="card border-0">
                        <img src="./img/trend_img.png">
                    </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <a href="javascript:void(0);"></a>
                    <div class="card border-0">
                        <img src="./img/trend_img.png">
                    </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <a href="javascript:void(0);"></a>
                    <div class="card border-0">
                        <img src="./img/trend_img.png">
                    </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <a href="javascript:void(0);"></a>
                    <div class="card border-0">
                        <img src="./img/trend_img.png">
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end_Trending-->

    <section class="product_item py-4">
        <div class="container">
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page-title">
                    <h5>Featured <span>Collections</span></h5>
                </div>
            </div>
            <div class="row m-0 mb-0 mb-lg-4 f_collect">
                <div class="col-6 col-lg-4 mb-3 fea_col">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="position-relative fc_bg">
                                <img src="./img/packaging.jpg">
                            </div>
                            <h6>Packaging Products</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4 mb-3 fea_col">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="position-relative fc_bg">
                                <img src="./img/stationery.jpg">
                            </div>
                            <h6>Stationery</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4 mb-3 fea_col">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="position-relative fc_bg">
                                <img src="./img/photobook.jpg">
                            </div>
                            <h6>Photo Books</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4 mb-3 fea_col">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="position-relative fc_bg">
                                <img src="./img/awards.jpg">
                            </div>
                            <h6>Awards</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4 mb-3 fea_col">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="position-relative fc_bg">
                                <img src="./img/corporate_gifts.jpg">
                            </div>
                            <h6>Corporate Gifts</h6>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4 mb-3 fea_col">
                    <a href="javascript:void(0);">
                        <div class="card border-0">
                            <div class="position-relative fc_bg">
                                <img src="./img/marketing.jpg">
                            </div>
                            <h6>Marketing Materials</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end_Featured_Collections-->

    <section class="pb-4 pb-lg-5">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <!-- <img src="./img/ad_b1.jpg" class="w-100"> -->
                <div class="col-12 p-0 col-lg-10">
                    <img src="./img/banner_b2.png" class="w-100">
                </div>
            </div>
        </div>
    </section><!--end_add_banner-->

    <section class="product_item py-4">
        <div class="container">
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page-title">
                    <h5>Blogs</h5>
                </div>
            </div>
            <div class="row m-0 idesfor">
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <div class="card border-0">
                        <div class="row g-0">
                        <div class="col-md-5">
                            <img src="./img/packaging.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                            <h5 class="card-title">Lorem Ipsum is simply dummy text</h5>
                            <p class="card-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <div class="d-flex justify-content-end mt-3">
                                <a href="" class="btn bin_shop">Read More</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <div class="card border-0">
                        <div class="row g-0">
                        <div class="col-md-5">
                            <img src="./img/decor.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                            <h5 class="card-title">Lorem Ipsum is simply dummy text</h5>
                            <p class="card-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </p>
                            <div class="d-flex justify-content-end mt-3">
                                <a href="" class="btn bin_shop">Read More</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end_Ideas for_life-->

    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <div class="col-12 col-lg-10">
                    <img src="./img/image.png" class="w-100">
                </div>
            </div>
        </div>
    </section><!--end_add_banner-->

@endsection