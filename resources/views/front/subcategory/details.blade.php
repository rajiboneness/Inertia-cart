
@extends('layouts.app')
@section('page')
@section('content')
<!--end_heaader-->
    <section class="product_item">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('front.category.details', $items->category->slug) }}"> {{ $items->category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $items->slug}}</li>
                    </ol>
                </nav>
            </div>
            @if (count($items->product) > 0)
                <div class="row m-0 mb-4 mb-lg-4">
                    <div class="page_title_inner">
                        <h5><span>{{ $items->name }}</span></h5>
                        <p>{{ $items->description }}</p>
                    </div>
                </div>
                <div class="row m-0 mt-3 mt-lg-5 product_list">
                    @forelse($items->product as $productKey => $productValue)
                        <div class="col-6 col-lg-3 mb-3">
                            <a href="{{ route('front.product.details', $productValue->slug) }}">
                                <div class="card border-0">
                                    <div class="product_cimage">
                                        <img src="{{ asset($productValue->image) }}">
                                    </div>
                                    <h6>{{ $productValue->name }}</h6>
                                    <p><del class="text-danger">{{ $productValue->price }} </del><span>{{ $productValue->offer_price }}</span></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
            <p class="mt-5">Sorry, No products found under <span class="text-primary">{{$items->name}} </span></p>
            @endif
        </div>
    </section>
@endsection