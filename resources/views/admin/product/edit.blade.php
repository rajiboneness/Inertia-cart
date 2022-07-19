@extends('admin.layouts.app')

@section('page', 'Update Project')
@section('content')
<section>
    <form method="POST" action="{{ route('admin.product.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <select class="form-control" name="collection_id" id="collection_id">
                            <option hidden selected>Select collection...</option>
                            @foreach ($collections as $index => $item)
                            <option value="{{$item->id}}" {{ ($data->collection_id == $item->id) ? 'selected' : '' }}>
                                {{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('collection_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="cat_id" id="cat_id">
                            <option value="{{$categories->id}}">{{ $categories->name }}</option>
                        </select>
                        @error('cat_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-sm-4">
                        <select class="form-control" name="sub_cat_id" id="sub_cat_id">
                            <option value="{{$subcategories->id}}">{{ $subcategories->name }}</option>
                        </select>
                        @error('sub_cat_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="Add Product Title" class="form-control"
                        value="{{$data->name}}">
                    @error('name') <p class="small text-danger">{{ $message }}</p> @enderror
                </div>

                <div class="card shadow-sm">
                    <div class="card-header">
                        Product Short Description
                    </div>
                    <div class="card-body">
                        <textarea id="product_short_des" name="short_desc">{{$data->short_desc}}</textarea>
                        @error('short_desc') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <textarea id="product_des" name="desc">{{$data->desc}}</textarea>
                    @error('desc') <p class="small text-danger">{{ $message }}</p> @enderror
                </div>

                <div class="card shadow-sm">
                    <div class="card-header">
                        Product data
                    </div>
                    <div class="card-body pt-0">
                        <div class="admin__content">
                            <aside>
                                <nav>Price</nav>
                            </aside>
                            <content>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Regular Price</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputprice6" class="form-control"
                                            aria-describedby="priceHelpInline" name="price" value="{{$data->price}}">
                                        @error('price') <p class="small text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-auto">
                                        <span id="priceHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputprice6" class="col-form-label">Offer Price</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputprice6" class="form-control"
                                            aria-describedby="priceHelpInline" name="offer_price"
                                            value="{{$data->offer_price}}">
                                        @error('offer_price') <p class="small text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-auto">
                                        <span id="passwordHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                            </content>
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
                                    <div class="col-auto">
                                        <input type="text" id="inputprice6" class="form-control"
                                            aria-describedby="priceHelpInline" name="meta_title"
                                            value="{{$data->meta_title}}">
                                        @error('meta_title') <p class="small text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-auto">
                                        <span id="priceHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputprice6" class="col-form-label">Description</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputprice6" class="form-control"
                                            aria-describedby="priceHelpInline" name="meta_desc"
                                            value="{{$data->meta_desc}}">
                                        @error('meta_desc') <p class="small text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-auto">
                                        <span id="passwordHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-2 align-items-center">
                                    <div class="col-3">
                                        <label for="inputprice6" class="col-form-label">Keyword</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputprice6" class="form-control"
                                            aria-describedby="priceHelpInline" name="meta_keyword"
                                            value="{{$data->meta_keyword}}">
                                        @error('meta_keyword') <p class="small text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-auto">
                                        <span id="passwordHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                            </content>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Publish
                    </div>
                    <div class="card-body text-end">
                        <input type="hidden" name="product_id" value="{{$data->id}}">
                        <button type="submit" class="btn btn-sm btn-danger">Publish </button>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header">
                        Product Image
                    </div>
                    <div class="card-body">
                        <div class="w-100 product__thumb">
                            <label for="thumbnail"><img id="output" src="{{ asset($data->image) }}" /></label>
                            @error('image') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <input type="file" id="thumbnail" accept="image/*" name="image" onchange="loadFile(event)"
                            class="d-none">
                        <script>
                            var loadFile = function (event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                output.onload = function () {
                                    URL.revokeObjectURL(output.src) // free memory
                                }
                            };

                        </script>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header">
                        More product images
                    </div>
                    <div class="card-body">
                        <input type="file" accept="image/*" name="product_images[]" multiple>
                        @error('product_images') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3>Products Variation</h3>
                        <p class="small text-muted m-0">Variation : Add | Update | Show</p>
                    </div>
                    <div class="card-body">
                        <div class="admin__content">
                            <aside>
                                <nav>Available Variation</nav>
                                <p class="small text-muted">Drag & drop Variation to set position</p>
                            </aside>
                            <content>
                                <div class="color_holder row_position">
                                    <div class="color_holder_single single-color-holder d-flex">
                                        @foreach ($data->ProductVariation as $ProductVariationKey => $ProductVariationtitle)
                                        <div class="color_box shadow-sm" id="{{$ProductVariationtitle->id}}"
                                            style="{!! ($ProductVariationtitle->status == 0) ? 'background: #c1080a59;' : '' !!}">
                                            <p class="small card-title" style="margin-bottom: 0rem">{{ $ProductVariationtitle->title }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <a href="#addVariationModal" data-bs-toggle="modal" class="btn btn-sm btn-success">Add
                                    Variation</a>
                            </content>
                        </div>
                        <div class="col-sm-12">
                            <h3>Variations</h3>
                        </div>
                        @foreach ($productVariationGroup as $productVariationKey => $productVariationGroupVal)
                        
                        @php
                            $getTitleId = \App\Models\ProductVariation::select('id')->where('title', $productVariationGroupVal->title)->get();
                        @endphp
                            @foreach ($getTitleId as $item)
                                <div class="admin__content">
                                    <content>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="color_box">
                                                    <p >{{ $productVariationGroupVal->title}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <form action="{{ route('admin.product.variationtype.add') }}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-sm">
                                                                    <select name="value" class="form-control">
                                                                        <option value="" selected>Select Value..</option>
                                                                        @php
                                                                            $variationValueData = \App\Models\ProductVariationValue::where('variation_id', $item->id)->get();
                                                                            foreach ($variationValueData as $key => $value) {
                                                                                echo '<option value="'.$value->value.'">'.$value->value.'</option>';
                                                                            }
                                                                        @endphp
                                                                    </select>
                                                                    @error('value') <p class="small text-danger">{{ $message }}</p> @enderror
                                                                </div>
                                                                <input type="hidden" name="product_id" value="{{$data->id}}">
                                                                <input type="hidden" name="title" value="{{$productVariationGroupVal->title}}">
                                                                <div class="col-sm-auto">
                                                                    <button type="submit" class="btn btn-sm btn-success">+ Add Value</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                        @php
                                                            $productVariationtype = \App\Models\ProductVariationType::where('product_id', $data->id)->where('title',$productVariationGroupVal->title)->get();

                                                            $prodValueDIsplay = '';
                                                            foreach($productVariationtype as $productVariationKey => $productVariationValue) {
                                                                $VariationValue = $productVariationValue->value ? $productVariationValue->value : 'Na';

                                                                $prodValueDIsplay .= '<div class="size_holder my-2"><div class="row align-items-center"><div class="col-sm">'.$VariationValue.'</div><div class="col-sm-auto"><a href='.route('admin.product.variationtype.delete', $productVariationValue->id ).' class="btn btn-sm btn-outline-danger">Delete Value</a></div></div></div>';
                                                            }
                                                            // .route('admin.product.variation.size.delete', $productSizeVal->id).
                                                            $prodValueDIsplay .= '';
                                                        @endphp
                                                        {!!$prodValueDIsplay!!}
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-auto">
                                                <a href="#" class="btn btn-sm btn-danger">Delete Variation</a>
                                            </div>
                                        </div>
                                        
                                    </content>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

{{-- modal --}}

    <div class="modal fade" tabindex="-1" id="addVariationModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Variation Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.product.add-variation') }}" method="post">@csrf
                        <input type="hidden" name="product_id" value="{{$data->id}}">
                        <div class="form-group mb-3">
                            <select class="form-control" name="title" id="title">
                                <option value="" selected>Select title...</option>
                                @foreach ($variations as $index => $item)
                                <option value="{{$item->id}}"
                                    {{ (old('title')) ?? (old('title') == $item->id) ? 'selected' : ''  }}>
                                    {{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control" name="value" id="value">
                                <option value='0'>Select value....</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success">+ Add Variation Type</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    ClassicEditor
        .create(document.querySelector('#product_des'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#product_short_des'))
        .catch(error => {
            console.error(error);
        });

    // Auto selected
    $('#collection_id').change(function () {
        var id = $(this).val();
        $('#cat_id').find('option').not(':first').remove();

        // AJAX request 
        $.ajax({
            url: '/admin/product/getcategory/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (response) {

                var options = '<option value="" selected="" hidden="">Select Category</option>';
                $.each(response.cat, function (key, val) {
                    options += '<option value="' + val.id + '">' + val.name + '</option>';
                });
                $('#cat_id').empty().append(options);
            }
        });
    });
    $('#title').change(function () {
        var id = $(this).val();

        // AJAX request 
        $.ajax({
            url: '/admin/product/getVariationValue/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (response) {

                    var options = '<option value="" selected="" hidden="">Select value</option>';
                    $.each(response.value, function(key, val) {
                        options += '<option value="' + val.id + '">' + val.value + '</option>';
                    });
                    $('#value').empty().append(options);
            }
        });
    });

    $('#cat_id').change(function () {
        var id = $(this).val();
        $('#sub_cat_id').find('option').not(':first').remove();

        // AJAX request 
        $.ajax({
            url: '/admin/product/getSubcategory/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (response) {

                var options = '<option value="" selected="" hidden="">Select Sub Category</option>';
                $.each(response.sub, function (key, val) {
                    options += '<option value="' + val.id + '">' + val.name + '</option>';
                });
                $('#sub_cat_id').empty().append(options);
            }
        });
    });

</script>
@endsection
