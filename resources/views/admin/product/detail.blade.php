@extends('admin.layouts.app')

@section('page', 'Project Details')
@section('content')
<section>
    <form method="post" action="{{ route('admin.product.update', $data->id) }}" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-sm-3">
                <div class="card shadow-sm">
                    <div class="card-header">Main image</div>
                    <div class="card-body">
                        <div class="w-100 product__thumb">
                            <label for="thumbnail"><img id="output" src="{{ asset($data->image) }}" /></label>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header">More images</div>
                    <div class="card-body">
                        <div class="w-100 product__thumb">
                            @foreach($images as $index => $singleImage)
                            <label for="thumbnail"><img id="output" src="{{ asset($singleImage->image) }}"
                                    class="img-thumbnail mb-3" /></label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <h2>{{$data->name}}</h2>
                        </div>
                        <div class="form-group mb-3">
                            <p><span class="text-muted">Category : </span>{{$data->category->name}} | <span
                                    class="text-muted">Sub-category : </span>{{$data->subCategory->name}} | <span
                                    class="text-muted">Collection : </span>{{$data->collection->name}}</p>
                        </div>

                        @if($data->ProductVariation)
                            <hr>
                            <div class="d-flex">
                                @foreach($data->ProductVariation as $variantKey => $variantValue)
                                    <a href="#" data-bs-target="#VariationModal{{$variantValue->title}}" data-bs-toggle="modal">    
                                        <div
                                            style="text-align:center margin-right: 20px;">
                                            <div class="btn btn-sm" style="background-color: #87CEEB;margin-right: 20px;">
                                            {{ucwords($variantValue->title)}}
                                            </div>
                                        </div>
                                    </a>

                                    {{--  modal --}}
                                        <div class="modal fade" id="VariationModal{{$variantValue->title}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6>{{$variantValue->title}}</h6>
                                                        <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-striped variation_table">
                                                            <thead>
                                                              <tr>
                                                                <th>SL</th>
                                                                <th>Value</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $ValueDetails = \App\Models\ProductVariationType::where('title', $variantValue->title)->where('product_id', $variantValue->product_id)->get();
                                                                $i = 1;
                                                                    @endphp
                                                               
                                                                @foreach($ValueDetails as $detailsKey => $detailsValue)
                                                                <tr>
                                                                    <td>{{ $i }}</td>
                                                                    <td>{{ $detailsValue->value }}</td>
                                                                </tr>
                                                                @php
                                                                $i++;
                                                                @endphp
                                                                @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                            <p class="small text-dark" style="color:#9a9a9a !important;">Tap on Button to get Details</p>
                        @endif

                        <hr>
                        <div class="form-group mb-3">
                            <h4>
                                <span class="text-muted small"><del>Rs {{$data->price}}</del></span>
                                <span class="text-danger">Rs {{$data->offer_price}}</span>
                            </h4>
                        </div>
                        <hr>
                        <div class="form-group mb-3">
                            <p class="small">Short Description</p>
                            {!! $data->short_desc !!}
                        </div>
                        <hr>
                        <div class="form-group mb-3">
                            <p class="small">Description</p>
                            {!! $data->desc !!}
                        </div>

                        <div class="admin__content">
                            <aside>
                                <nav>Meta</nav>
                            </aside>
                            <content>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Title</label>
                                    </div>
                                    <div class="col-9">
                                        <p class="small">{{$data->meta_title}}</p>
                                    </div>
                                </div>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputprice6" class="col-form-label">Description</label>
                                    </div>
                                    <div class="col-9">
                                        <p class="small">{{$data->meta_desc}}</p>
                                    </div>
                                </div>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputprice6" class="col-form-label">Keyword</label>
                                    </div>
                                    <div class="col-9">
                                        <p class="small">{{$data->meta_keyword}}</p>
                                    </div>
                                </div>
                            </content>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection

@section('script')
@endsection
