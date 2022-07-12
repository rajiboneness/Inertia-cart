
@extends('layouts.app')
@section('page', 'products list')
@section('content')
<!--end_heaader-->
    <section class="product_item">
        <div class="container">
            <div class="row m-0 mt-3 mt-lg-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->name}}</li>
                    </ol>
                </nav>
            </div>
            @if (count($data->SubCategoryDetails) > 0)
                <div class="row m-0 mb-4 mb-lg-4">
                    <div class="page_title_inner">
                        <h5><span>{{ $data->name }}</span></h5>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
                <div class="row m-0 mt-3 mt-lg-5 product_list sub_list">
                    @forelse($data->SubCategoryDetails as $collectionCatKey => $collectionCatValue)
                        <div class="col-6 col-lg-3 mb-3">
                            <a href="{{ route('front.category.sub_category_details', [$data->slug,$collectionCatValue->slug]) }}">
                                <div class="card border-0 ">
                                    <div class="product_cimage">
                                        <img src="{{ asset($collectionCatValue->image_path) }}">
                                    </div>
                                    <h6>{{ $collectionCatValue->name }}</h6>
                                    @php 
                                    $MinAmount = App\Models\Product::select('offer_price')->where('sub_cat_id', $collectionCatValue->id)->min('offer_price');
                                    @endphp
                                    <p> Starting from <span>{{ $MinAmount ? $MinAmount : "100" }}</span></p>
                                    <p>{!!$collectionCatValue->description !!}</p>
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