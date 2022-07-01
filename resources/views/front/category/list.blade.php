
@extends('layouts.app')
@section('page', 'products list')
@section('content')
<!--end_heaader-->
    <section class="product_item">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->name}}</li>
                    </ol>
                </nav>
            </div>
            @if (count($data->categoryDetails) > 0)
                <div class="row m-0 mb-4 mb-lg-4">
                    <div class="page_title_inner">
                        <h5><span>{{ $data->name }}</span></h5>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
                <div class="row m-0 mt-3 mt-lg-5 product_list">
                    @forelse($data->categoryDetails as $collectionCatKey => $collectionCatValue)
                        <div class="col-6 col-lg-3 mb-3">
                            <a href="{{ route('front.category.details', $collectionCatValue->slug) }}">
                                <div class="card border-0">
                                    <div class="product_cimage">
                                        <img src="{{ asset($collectionCatValue->image_path) }}">
                                    </div>
                                    <h6>{{ $collectionCatValue->name }}</h6>
                                    <p>100 cards starting from <span>250</span></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
            <p class="mt-5">Sorry, No products found under <span class="text-primary">{{$data->name}} </span></p>
            @endif
        </div>
    </section>
@endsection