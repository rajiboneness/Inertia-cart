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
                        <select class="form-control" name="collection_id">
                            <option hidden selected>Select collection...</option>
                            @foreach ($collections as $index => $item)
                                <option value="{{$item->id}}" {{ ($data->collection_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('collection_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="cat_id">
                            <option hidden selected>Select category...</option>
                            @foreach ($categories as $index => $item)
                                <option value="{{$item->id}}" {{ ($data->cat_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('cat_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-sm-4">
                        <select class="form-control" name="sub_cat_id">
                            <option hidden selected>Select sub-category...</option>
                            @foreach ($sub_categories as $index => $item)
                                <option value="{{$item->id}}" {{ ($data->sub_cat_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('sub_cat_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="Add Product Title" class="form-control" value="{{$data->name}}">
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
                                <input type="text" id="inputprice6" class="form-control" aria-describedby="priceHelpInline" name="price" value="{{$data->price}}">
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
                                <input type="text" id="inputprice6" class="form-control" aria-describedby="priceHelpInline" name="offer_price" value="{{$data->offer_price}}">
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
                                        <input type="text" id="inputprice6" class="form-control" aria-describedby="priceHelpInline" name="meta_title" value="{{$data->meta_title}}">
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
                                        <input type="text" id="inputprice6" class="form-control" aria-describedby="priceHelpInline" name="meta_desc" value="{{$data->meta_desc}}">
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
                                        <input type="text" id="inputprice6" class="form-control" aria-describedby="priceHelpInline" name="meta_keyword" value="{{$data->meta_keyword}}">
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
                        <button type="submit" class="btn btn-sm btn-danger">Publish </button>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header">
                        Product Image
                    </div>
                    <div class="card-body">
                        <div class="w-100 product__thumb">
                            <label for="thumbnail"><img id="output" src="{{ asset($data->image) }}"/></label>
                            @error('image') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <input type="file" id="thumbnail" accept="image/*" name="image" onchange="loadFile(event)" class="d-none">
                        <script>
                            var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                output.onload = function() {
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
    </form>
</section>
@endsection
@section('script')
    <script>
        ClassicEditor
        .create( document.querySelector( '#product_des' ) )
        .catch( error => {
            console.error( error );
        });
        ClassicEditor
        .create( document.querySelector( '#product_short_des' ) )
        .catch( error => {
            console.error( error );
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
                        $.each(response.cat, function(key, val) {
                            options += '<option value="' + val.id + '">' + val.name + '</option>';
                        });
                        $('#cat_id').empty().append(options);
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
                        $.each(response.sub, function(key, val) {
                            options += '<option value="' + val.id + '">' + val.name + '</option>';
                        });
                        $('#sub_cat_id').empty().append(options);
                }
            });
        });
    </script>
@endsection
