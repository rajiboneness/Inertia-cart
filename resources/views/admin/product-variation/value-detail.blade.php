@extends('admin.layouts.app')

@section('page', 'Variation Value Update')
@section('content')
<section>
<div class="text-end py-3"><a href="{{ route('admin.product.value.index') }}" class="btn btn-success">back</a></div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 text-right">
                            <h3>{{ $data->value }}</h3>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.product.value.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Edit Variation Value</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">Title <span class="text-danger">*</span> </label>
                            <select class="form-control" name="variation_id">
                                <option hidden selected>Select Title...</option>
                                @foreach ($variations as $index => $item)
                                    <option value="{{$item->id}}" {{ ($item->id == $data->variation_id) ? 'selected' : '' }}>{{ $item->title }}</option>
                                @endforeach
                            </select>
                            @error('variation_id') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Value <span class="text-danger">*</span> </label>
                            <input type="text" name="value" placeholder="" class="form-control" value="{{ $data->value }}">
                            @error('value') <p class="small text-danger">{{ $message }}</p> @enderror
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