@extends('admin.layouts.app')

@section('page', 'Create About Us')
@section('content')
<section>
    <form method="post" action="{{ route('admin.aboutus.store') }}" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="Add Product Title" class="form-control"
                        value="{{old('name')}}">
                    @error('name') <p class="small text-danger">{{ $message }}</p> @enderror
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
                        About Us Image
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
</script>
@endsection
