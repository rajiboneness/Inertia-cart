@extends('admin.layouts.app')

@section('page', 'Product Variation Value')

@section('content')

<section>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $item)
                            <tr>
                                <td> {{ $item->VariationId->title }} </td>
                                <td>
                                   {{ $item->value }}
                                <div class="row__action">
                                    <a href="{{ route('admin.product.value.view', $item->id) }}">Edit</a>
                                    <a href="{{ route('admin.product.value.view', $item->id) }}">View</a>
                                    <a href="{{ route('admin.product.value.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a>
                                    <a href="{{ route('admin.product.value.delete', $item->id) }}" class="text-danger">Delete</a>
                                </div>
                                </td>
                                <td>Published<br/>{{date('d M Y', strtotime($item->created_at))}}</td>
                                <td><span class="badge bg-{{($item->status == 1) ? 'success' : 'danger'}}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</span></td>
                            </tr>
                            @empty
                            <tr><td colspan="100%" class="small text-muted">No data found</td></tr>
                            @endforelse
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.product.value.store') }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Add New Variation Value</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">Title <span class="text-danger">*</span> </label>
                            <select class="form-control" name="variation_id">
                                <option hidden selected>Select Variation...</option>
                                @foreach ($variations as $index => $item)
                                    <option value="{{$item->id}}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            @error('variation_id') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Value <span class="text-danger">*</span> </label>
                            <input type="text" name="value" placeholder="" class="form-control" value="{{old('value')}}">
                            @error('value') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-danger">Add Variation Value</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection