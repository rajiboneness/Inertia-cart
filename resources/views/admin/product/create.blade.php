@extends('admin.layouts.app')

@section('page', 'Create Project')
@section('content')
<section>
    <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <select class="form-control" name="collection_id" id="collection_id">
                            <option hidden selected>Select collection...</option>
                            @foreach ($collections as $index => $item)
                            <option value="{{$item->id}}"
                                {{ (old('collection_id')) ?? (old('collection_id') == $item->id) ? 'selected' : ''  }}>
                                {{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('collection_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="cat_id" id="cat_id">
                            <option value='0'>Select Category....</option>
                        </select>
                        @error('cat_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-sm-4">
                        <select class="form-control" name="sub_cat_id" id="sub_cat_id">
                            <option value='0'>Select Sub Category....</option>
                        </select>
                        @error('sub_cat_id') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>

                </div>

                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="Add Product Title" class="form-control"
                        value="{{old('name')}}">
                    @error('name') <p class="small text-danger">{{ $message }}</p> @enderror
                </div>

                <div class="card shadow-sm">
                    <div class="card-header">
                        Short Description
                    </div>
                    <div class="card-body">
                        <textarea id="product_short_des" name="short_desc">{{old('short_desc')}}</textarea>
                        @error('short_desc') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header">
                        Description
                    </div>
                    <div class="card-body">
                        <textarea id="product_des" name="desc">{{old('desc')}}</textarea>
                        @error('desc') <p class="small text-danger">{{ $message }}</p> @enderror
                    </div>
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
                                            aria-describedby="priceHelpInline" name="price" value="{{old('price')}}">
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
                                            value="{{old('offer_price')}}">
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
                                            value="{{old('meta_title')}}">
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
                                            value="{{old('meta_desc')}}">
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
                                            value="{{old('meta_keyword')}}">
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
                <div class="card shadow-sm">
                    <div class="card-header">
                        Products Variation Type
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm" id="timePriceTable">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="title[]" >
                                                    <option hidden selected>Select Title...</option>
                                                    @foreach ($variations as $index => $item)
                                                    <option value="{{$item->id}}"
                                                        {{ (old('title')) ?? (old('title') == $item->id) ? 'selected' : ''  }}>
                                                        {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('title') <p class="small text-danger">{{ $message }}</p> @enderror
                                            </td>
                                            <td>
                                                <select class="form-control variation_value" name="value[]" >
                                                    <option hidden selected>Select Value...</option>
                                                    @foreach ($variationValue as $index => $data)
                                                    <option value="{{$data->id}}"
                                                        {{ (old('value')) ?? (old('value') == $data->id) ? 'selected' : ''  }}>
                                                        {{ $data->value }}</option>
                                                    @endforeach
                                                </select>
                                                @error('value') <p class="small text-danger">{{ $message }}</p> @enderror
                                            </td>
                                            <td><a class="btn btn-sm btn-success actionTimebtn addNewTime">+</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                @error('time')<p class="text-danger">{{$message}}</p>@enderror
                                @error('price')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
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
                        Product Main Image
                    </div>
                    <div class="card-body">
                        <div class="w-100 product__thumb">
                            <label for="thumbnail"><img id="output"
                                    src="{{ asset('admin/images/placeholder-image.jpg') }}" /></label>
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
    </form>
</section>
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

    $(document).on('click', '.addNewTime', function () {
        var thisClickedBtn = $(this);
        thisClickedBtn.removeClass(['addNewTime', 'btn-success']);
        thisClickedBtn.addClass(['removeTimePrice', 'btn-danger']).text('X');

        var toAppend = `
        <tr>
            <td>
                <select class="form-control" name="title[]" >
                    <option hidden selected>Select Title...</option>
                    @foreach ($variations as $index => $item)
                    <option value="{{$item->id}}"
                        {{ (old('title')) ?? (old('title') == $item->id) ? 'selected' : ''  }}>
                        {{ $item->title }}</option>
                    @endforeach
                </select>
                @error('title') <p class="small text-danger">{{ $message }}</p> @enderror
            </td>
            <td>
                <select class="form-control variation_value" name="value[]" >
                    <option hidden selected>Select Value...</option>
                    @foreach ($variationValue as $index => $data)
                    <option value="{{$data->id}}"
                        {{ (old('value')) ?? (old('value') == $data->id) ? 'selected' : ''  }}>
                        {{ $data->value }}</option>
                    @endforeach
                </select>
                @error('value') <p class="small text-danger">{{ $message }}</p> @enderror
            </td>
            <td><a class="btn btn-sm btn-success actionTimebtn addNewTime">+</a></td>
        </tr>
        `;

        $('#timePriceTable tbody').append(toAppend);
    });

    $(document).on('click', '.removeTimePrice', function () {
        var thisClickedBtn = $(this);
        thisClickedBtn.closest('tr').remove();
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
