
@extends('layouts.app')
@section('page', 'Home')
@section('content')

            <div class="collapse navbar-collapse" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('front.product.details') }}">Single Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.product.list') }}">All Products</a>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Apparel & Clothes
                        </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row m-0">
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">T Shirts</a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Basic</a></li>
                                        <li><a href="javascript:void(0);">Classic</a></li>
                                        <li><a href="javascript:void(0);">Polyester</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Polos</a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Basic</a></li>
                                        <li><a href="javascript:void(0);">Classic</a></li>
                                        <li><a href="javascript:void(0);">Polyester</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Hoodies</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Jackets</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Kids T Shirts</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Jersey's</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Track Suit</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Uniform</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Formal Shirts</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Caps</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Corporate Gifting
                        </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row m-0">
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">T Shirts</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Drinkware</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Coffee Mugs</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Note Books & Diaries</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Pen & Pencil</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Bags</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Key Chains</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Gift Set</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Trophies & Mementos</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stationary
                        </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row m-0">
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Visiting Cards</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Brochures</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Pens</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Notebooks</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">ID Cards</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Diaries</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Certificates</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Luggage Tags</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Office Supplies</a>
                                </div>
                                <div class="col-12 col-lg-2 mega_sbmenu">
                                    <a href="javascript:void(0);">Badges</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Eco Friendly</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Branded Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Promotional Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Welcome/Joinee Kits</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--end_heaader-->
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
                @foreach ($categories as $category)
                    <div class="col-6 col-lg-3 mb-3">
                        <a href="javascript:void(0);">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="{{ asset($category->image_path) }}">
                                </div>
                                <h6>{{ $category->name }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
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
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <a href="javascript:void(0);">
                            <div class="nw_launch">
                                <div class="nl_text">
                                    <h6>{{ $product->name }}</h6>
                                    <p>{!!$product->short_desc !!}</p>
                                </div>
                                <div class="ln_image">
                                    <img src="{{ asset($product->image) }}">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
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
                @foreach ($collections as $item)
                    <div class="col-6 col-lg-4 mb-3 fea_col">
                        <a href="javascript:void(0);">
                            <div class="card border-0">
                                <div class="position-relative fc_bg">
                                    <img src="{{ asset($item->image_path) }}">
                                </div>
                                <h6>{{ $item->name }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
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