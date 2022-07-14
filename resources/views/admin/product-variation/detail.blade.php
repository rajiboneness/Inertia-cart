@extends('admin.layouts.app')

@section('page', 'Variation Update')
@section('content')
<section>
<div class="text-end py-3"><a href="{{ route('admin.product.variation.index') }}" class="btn btn-success">back</a></div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 text-right">
                            <h3>{{ $data->title }}</h3>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.product.variation.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Edit Variation</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">Title <span class="text-danger">*</span> </label>
                            <input type="text" name="title" placeholder="" class="form-control" value="{{ $data->title }}">
                            @error('title') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-danger">Update Variation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection