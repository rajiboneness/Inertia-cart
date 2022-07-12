@extends('admin.layouts.app')

@section('page', 'Social Links')

@section('content')

<section>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center"><i class="fi fi-br-picture"></i> Image</th>
                                <th>name</th>
                                <th>link</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $item)
                            <tr>
                                <td class="text-center column-thumb">
                                    <img src="{{ asset($item->image) }}">
                                </td>
                                <td>
                                {{$item->name}}
                                <div class="row__action">
                                    <a href="{{ route('admin.site.view', $item->id) }}">Edit</a>
                                    <a href="{{ route('admin.site.view', $item->id) }}">View</a>
                                    <a href="{{ route('admin.site.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a>
                                    <a href="{{ route('admin.site.delete', $item->id) }}" class="text-danger">Delete</a>
                                </div>
                                </td>
                                <td><a href="{{ $item->link }}" target="_blank"><span class="badge bg-success">Social link</span></a></td>
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
                    <form method="POST" action="{{ route('admin.site.store') }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Add New Social link</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">Name <span class="text-danger">*</span> </label>
                            <input type="text" name="name" placeholder="" class="form-control" value="{{old('name')}}">
                            @error('name') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Social link <span class="text-danger">*</span> </label>
                            <input type="text" name="link" placeholder="" class="form-control" value="{{old('link')}}">
                            @error('link') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12 card">
                                <div class="card-header p-0 mb-3">Social image <span class="text-danger">*</span></div>
                                <div class="card-body p-0">
                                    <div class="w-100 product__thumb">
                                        <label for="thumbnail"><img id="output" src="{{ asset('admin/images/placeholder-image.png') }}" /></label>
                                    </div>
                                    <input type="file" name="image" id="thumbnail" accept="image/*" onchange="loadFile(event)" class="d-none">
                                    <script>
                                        let loadFile = function(event) {
                                            let output = document.getElementById('output');
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
                            <button type="submit" class="btn btn-sm btn-danger">Add New Social link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection