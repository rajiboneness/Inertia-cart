@extends('layouts.app')
@section('page')
@section('content')
<!--end_heaader-->
    <section class="product_item border-0">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.collection.category', $data->collection->slug) }}"> {{ $data->collection->name }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.category.details', $data->category->slug) }}">{{ $data->category->name }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.category.sub_category_details', [$data->category->slug,$data->subCategory->slug]) }}">{{ $data->subCategory->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $data->name }}</li>
                    </ol>
                </nav>
            </div>
            <div class="row m-0 mt-3 mt-lg-3">
                <div class="col-12 col-lg-5">
                    <div class="swiper pd_slide2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset($data->image) }}" />
                            </div>
                            @foreach($data->MoreImages as $moreImageKey => $moreImageValue)
                            <div class="swiper-slide">
                                <img src="{{ asset($moreImageValue->image) }}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper pd_slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset($data->image) }}" />
                            </div>
                            @foreach($data->MoreImages as $moreImageKey => $moreImageValue)
                            <div class="swiper-slide">
                                <img src="{{ asset($moreImageValue->image) }}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 ps-lg-3">
                    <div class="pd_text">
                        <h5>{{ $data->name }}</h5>
                        <p>Same day business cards.</p>
                        <ul>
                            <li>
                               {!! $data->short_desc !!}
                            </li>
                        </ul>
                        <h6 class="mt-lg-4">Same-Day Delivery for orders placed before 3 pm.</h6>
                        <form class="row m-0 ">
                            @foreach($data->ProductVariation as $ProductVariationKey => $ProductVariationvalue)
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                @php
                                    $getVariationValue = \App\Models\ProductVariationType::select('id','value')->where('title', $ProductVariationvalue->title)->where('product_id', $data->id)->orderBy('value', 'ASC')->get();
                                @endphp
                                <label>{{ $ProductVariationvalue->title }}</label>
                                <select class="form-select">
                                    @foreach($getVariationValue as $getVariationValueKey =>$getVariationValueData)
                                        <option value="{{ $getVariationValueData->id }}">{{ $getVariationValueData->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endforeach
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Pincode</label>
                                <input class="form-control" type="text" placeholder="Pincode">
                            </div>
                            <div class="cart_btnsec">
                                <h4>₹{{ sprintf("%02.2f", $data->offer_price) }}<small>inclusive of all taxes</small>
                                    <span>for 
                                    
                                        {{ $getVariationValueData->value }} 
                                    
                                    Qty (₹9.44 / piece)</span></h4>
                                <button class="btn cart_btn">Design Your Product <i data-feather="arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-2 mt-lg-5">
        <div class="container">
            <div class="row m-0 bg-light p-3">
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="devl_logo">
                        <img src="../img/free_delivery.png" height="50px">
                        <h6>Express Delivery <small>4 hours/same day delivery available at selected locations.</small></h6>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="devl_logo">
                        <img src="../img/delv.png" height="50px">
                        <h6>Standard Delivery <small>Estimated delivery by  <b class="text-dark">Mon, May 2</b></small></h6>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="devl_logo">
                        <img src="../img/store_pickup.png" height="50px">
                        <h6>Store Pickup <small>Pickup available at 27 stores across 6 cities.</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_item py-4 py-lg-5">
        <div class="container">
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page_title_inner">
                    <h5>More <span>Business Cards</span></h5>
                </div>
            </div>
            <div class="row m-0 product_list m-0 mt-2 mt-lg-3">
                <div class="swiper mpm_slide">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="product_details.html">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="../img/business-cards.png">
                                </div>
                                <h6>Business Cards</h6>
                                <p>100 cards starting from <span>₹177</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="product_details.html">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="../img/button-badges.png">
                                </div>
                                <h6>Button Badges</h6>
                                <p>25 button starting from <span>₹210</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="product_details.html">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="../img/flayers.png">
                                </div>
                                <h6>Flyers</h6>
                                <p>25 flyers starting from <span>₹210</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="product_details.html">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="../img/labels.png">
                                </div>
                                <h6>Labels</h6>
                                <p>25 labels starting from <span>₹210</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="product_details.html">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="../img/notebooks.png">
                                </div>
                                <h6>Notebooks</h6>
                                <p>25 notebooks starting from <span>₹210</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="product_details.html">
                            <div class="card border-0">
                                <div class="product_cimage">
                                    <img src="../img/poly-bags.png">
                                </div>
                                <h6>Courier Poly Bags</h6>
                                <p>25 poly bags starting from <span>₹210</span></p>
                            </div>
                        </a>
                    </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

@endsection