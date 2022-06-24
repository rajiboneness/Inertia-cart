
@extends('layouts.app')
@section('page', 'products list')
@section('content')
            <div class="collapse navbar-collapse" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Same Day Delivery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Stationery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Corporate Gifts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Apparels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Boxes & Packaging</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Awards & Trophies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Signs & Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Photo Gifts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Decor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Design Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--end_heaader-->
    <section class="product_item">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Same Day Delivery</li>
                    </ol>
                </nav>
            </div>
            <div class="row m-0 mb-4 mb-lg-4">
                <div class="page_title_inner">
                    <h5>Same Day <span>Delivery Products</span></h5>
                    <p>Need your product in a hurry?  Order before 3pm for same-day delivery or next day delivery</p>
                </div>
            </div>
            <div class="row m-0 mt-3 mt-lg-5 product_list">
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/business-cards.png">
                            </div>
                            <h6>Business Cards</h6>
                            <p>100 cards starting from <span>₹177</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/button-badges.png">
                            </div>
                            <h6>Button Badges</h6>
                            <p>25 button starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/flayers.png">
                            </div>
                            <h6>Flyers</h6>
                            <p>25 flyers starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/labels.png">
                            </div>
                            <h6>Labels</h6>
                            <p>25 labels starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/notebooks.png">
                            </div>
                            <h6>Notebooks</h6>
                            <p>25 notebooks starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/poly-bags.png">
                            </div>
                            <h6>Courier Poly Bags</h6>
                            <p>25 poly bags starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/booklets.png">
                            </div>
                            <h6>Booklets</h6>
                            <p>25 booklets starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <a href="product_details.html">
                        <div class="card border-0">
                            <div class="product_cimage">
                                <img src="./img/tshirts.png">
                            </div>
                            <h6>T-Shirts</h6>
                            <p>25 t-shirts starting from <span>₹210</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection