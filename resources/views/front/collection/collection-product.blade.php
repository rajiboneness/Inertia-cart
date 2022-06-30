
@extends('layouts.app')
@section('page', 'products list')
@section('content')
        {{-- <div class="collapse navbar-collapse" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <ul class="navbar-nav m-auto">
                    @foreach ($collections as $item)
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('front.collection.product', $item->slug) }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div> --}}
    </nav>
</header>
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
            @if (count($data->ProductDetails) > 0)
                <div class="row m-0 mb-4 mb-lg-4">
                    <div class="page_title_inner">
                        <h5><span>{{ $data->name }}</span></h5>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
                <div class="row m-0 mt-3 mt-lg-5 product_list">
                    @forelse($data->ProductDetails as $collectionProductKey => $collectionProductValue)
                        <div class="col-6 col-lg-3 mb-3">
                            <a href="product_details.html">
                                <div class="card border-0">
                                    <div class="product_cimage">
                                        <img src="{{ asset($collectionProductValue->image) }}">
                                    </div>
                                    <h6>{{ $collectionProductValue->name }}</h6>
                                    <p>100 cards starting from <span>{{ $collectionProductValue->price }}</span></p>
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