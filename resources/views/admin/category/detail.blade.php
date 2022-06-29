@extends('admin.layouts.app')

@section('page', 'Category details')
@section('content')
<section>
<div class="text-end py-3"><a href="{{ route('admin.category.index') }}" class="btn btn-success">back</a></div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <p>Image*</p>
                            <img src="{{ asset($data->image_path) }}" alt="" style="height: 100px" class="mr-4">
                        </div>
                        <div class="col-md-7 text-right">
                            <h3>{{ $data->name }}</h3>
                            <p class="small">{{ $data->description }}</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.category.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Edit Category</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">Name <span class="text-danger">*</span> </label>
                            <input type="text" name="name" placeholder="" class="form-control" value="{{ $data->name }}">
                            @error('name') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Category <span class="text-danger">*</span> </label>
                            <select class="form-control" name="call_id">
                                <option hidden selected>Select category...</option>
                                @foreach ($collection as $index => $item)
                                    <option value="{{$item->id}}" {{ ($item->id == $data->collection) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('call_id') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Description </label>
                            <textarea name="description" class="form-control">{{$data->description}}</textarea>
                            @error('description') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12 card">
                                <div class="card-header p-0 mb-3">Image <span class="text-danger">*</span></div>
                                <div class="card-body p-0">
                                    <div class="w-100 product__thumb">
                                        <label for="thumbnail"><img id="output" src="{{ asset($data->image_path) }}" /></label>
                                    </div>
                                    <input type="file" name="image_path" id="thumbnail" accept="image/*" onchange="loadFile(event)" class="d-none">
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
                                @error('image_path') <p class="small text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-danger">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection