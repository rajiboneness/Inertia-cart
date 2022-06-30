@extends('admin.layouts.app')

@section('page', 'Banner details')
@section('content')
<section>
<div class="text-end py-3"><a href="{{ route('admin.banner.index') }}" class="btn btn-success">back</a></div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <p>Image*</p>
                            <img src="{{ asset($data->image) }}" alt="" style="height: 100px" class="mr-4">
                        </div>
                        <div class="col-md-7 text-right">
                            <h3>{{ $data->title }}</h3>
                            <a href="{{ $data->link }}" target="_blank"><p class="small">{{ $data->link }}</p></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.banner.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Edit Banner</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">Title <span class="text-danger">*</span> </label>
                            <input type="text" name="title" placeholder="" class="form-control" value="{{ $data->title }}">
                            @error('title') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Banner link <span class="text-danger">*</span> </label>
                            <input type="text" name="link" placeholder="" class="form-control" value="{{ $data->link }}">
                            @error('link') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12 card">
                                <div class="card-header p-0 mb-3">Image <span class="text-danger">*</span></div>
                                <div class="card-body p-0">
                                    <div class="w-100 product__thumb">
                                        <label for="thumbnail"><img id="output" src="{{ asset($data->image) }}" /></label>
                                    </div>
                                    <input type="file" name="image" id="thumbnail" accept="image/*" onchange="loadFile(event)" class="d-none">
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
                                @error('image') <p class="small text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-danger">Update Banner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection