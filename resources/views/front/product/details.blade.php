
@extends('layouts.app')
@section('page', 'product details')
@section('content')
    <section class="product_item border-0">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Business Cards</li>
                        <li class="breadcrumb-item active" aria-current="page">Business Cards (Express Delivery)</li>
                    </ol>
                </nav>
            </div>
            <div class="row m-0 mt-3 mt-lg-3">
                <div class="col-12 col-lg-5">
                    <div class="swiper pd_slide2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/pro_imgl.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/business-cards.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Standard-BusinessCard.jpg" />
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper pd_slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/pro_imgl.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/business-cards.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Standard-BusinessCard.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 ps-lg-3">
                    <div class="pd_text">
                        <h5>Business Cards (Express Delivery)</h5>
                        <p>Same day business cards.</p>
                        <ul>
                            <li>
                                We have selected the most popular settings for you. 3.5 x 2 in on upto 300 gsm different materials.
                            </li>
                            <li>
                                You can select landscape or portrait, printing one side or two. A few clicks and you're done.
                            </li>
                            <li>
                                100 3.5 x 2 in business cards printed both sides using recommended specifications including express production for only 168.00
                            </li>
                        </ul>
                        <h6 class="mt-lg-4">Same-Day Delivery for orders placed before 3 pm.</h6>
                        <form class="row m-0 ">
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Paper Type</label>
                                <select class="form-select">
                                    <option>Standard Cards</option>
                                    <option>Textured Cards</option>
                                    <option>Metallic Cards</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Materials</label>
                                <select class="form-select">
                                    <option>Lykam matt paper - 300gsm</option>
                                    <option>Lykam Gloss paper - 300gsm</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Orientation</label>
                                <select class="form-select">
                                    <option>Portrait</option>
                                    <option>Landscape</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Printing Location</label>
                                <select class="form-select">
                                    <option>Front</option>
                                    <option>Back</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Quantity</label>
                                <select class="form-select">
                                    <option>100</option>
                                    <option>150</option>
                                    <option>200</option>
                                    <option>250</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-6 plr">
                                <label>Pincode</label>
                                <input class="form-control" type="text" placeholder="Pincode">
                            </div>
                            <div class="cart_btnsec">
                                <h4>₹944.00<small>inclusive of all taxes</small><span>for 100 Qty (₹9.44 / piece)</span></h4>
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