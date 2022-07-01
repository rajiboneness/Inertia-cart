
@extends('layouts.app')
@section('page', 'products list')
@section('content')
    <section class="product_item">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Collections</li>
                    </ol>
                </nav>
            </div>
            @foreach ($collections as $item)
                <div class="row m-0 mb-4 mb-lg-4">
                    <div class="page_title_inner">
                        <h5><span>{{ $item->name }}</span></h5>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                <div class="row m-0 mt-3 mt-lg-5 product_list">
                    @foreach ($item->categoryDetails as $data)
                        <div class="col-6 col-lg-3 mb-3">
                            <a href="product_details.html">
                                <div class="card border-0">
                                    <div class="product_cimage">
                                        <img src="{{ asset($data->image_path) }}">
                                    </div>
                                    <h6>{{ $data->name }}</h6>
                                    <p>100 cards starting from <span>₹177</span></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="col-6 col-lg-3 mb-3">
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
                    </div> --}}
                </div>
            @endforeach
        </div>
    </section>
@endsection