@extends('admin.layouts.app')

@section('page', 'Address')

@section('content')
<section>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $item)
                            <tr>
                                <td>
                                    {{$item->userId->name}}
                                </td>
                                <td>
                                {{$item->address}}
                                <div class="row__action">
                                    <a href="{{ route('admin.address.view', $item->id) }}">Edit</a>
                                    <a href="{{ route('admin.address.view', $item->id) }}">View</a>
                                    <a href="{{ route('admin.address.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a>
                                    <a href="{{ route('admin.address.delete', $item->id) }}" class="text-danger">Delete</a>
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
                    <form method="POST" action="{{ route('admin.address.store') }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Add New</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">User <span class="text-danger">*</span> </label>
                            <select class="form-control" name="user_id">
                                <option hidden selected>Select user...</option>
                                @foreach ($users as $index => $item)
                                    <option value="{{$item->id}}" {{ (old('user_id')) ?? (old('user_id') == $item->id) ? 'selected' : ''  }}>{{ $item->fname.' '.$item->lname }}</option>
                                @endforeach
                            </select>
                            @error('name') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Address </label>
                            <textarea name="address" class="form-control">{{old('address')}}</textarea>
                            @error('address') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Landmark <span class="text-danger">*</span> </label>
                            <input type="text" name="landmark" placeholder="" class="form-control" value="{{old('landmark')}}">
                            @error('landmark') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">lat <span class="text-danger">*</span> </label>
                            <input type="text" name="lat" placeholder="" class="form-control" value="{{old('lat')}}">
                            @error('lat') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">lng <span class="text-danger">*</span> </label>
                            <input type="text" name="lng" placeholder="" class="form-control" value="{{old('lng')}}">
                            @error('lng') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">state <span class="text-danger">*</span> </label>
                            <input type="text" name="state" placeholder="" class="form-control" value="{{old('state')}}">
                            @error('state') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">city <span class="text-danger">*</span> </label>
                            <input type="text" name="city" placeholder="" class="form-control" value="{{old('city')}}">
                            @error('city') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">pin <span class="text-danger">*</span> </label>
                            <input type="number" name="pin" placeholder="" class="form-control" value="{{old('pin')}}">
                            @error('pin') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">type <span class="text-danger">*</span> </label>
                            <select class="form-control" name="type">
                                <option hidden selected>Select type...</option>
                                    <option value="1">Home</option>
                                    <option value="2">Work</option>
                                    <option value="3">Other</option>
                            </select>
                            @error('type') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-danger">Add New</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection