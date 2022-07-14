@extends('admin.layouts.app')

@section('page', 'Customer')

@section('content')
<section>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">    
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="check-column">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault"></label>
                                </div>
                                </th>
                                <th class="text-center"><i class="fi fi-br-picture"></i></th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Gender</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $item)
                            <tr>
                                <td class="check-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                    </div>
                                </td>
                                <td class="text-center column-thumb">
                                    {{-- <img src="{{ asset($item->image) }}"> --}}
                                    @if($item->image)
                                        <img src="{{asset($item->image)}}" alt="" style="height: 100px" class="mr-4">
                                    @else
                                        <img src="{{asset('admin/images/placeholder-image.jpg')}}" alt="" class="mr-4" style="width: 100px;height: 100px;border-radius: 50%;">
                                    @endif
                                </td>
                                <td>
                                {{$item->fname.' '.$item->lname}}
                                <div class="row__action">
                                    <a href="{{ route('admin.customer.view', $item->id) }}">Edit</a>
                                    <a href="{{ route('admin.customer.view', $item->id) }}">View</a>
                                    <a href="{{ route('admin.customer.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a>
                                    <a href="{{ route('admin.customer.delete', $item->id) }}" class="text-danger">Delete</a>
                                </div>
                                </td>
                                <td>{{ $item->email }} <br> {{ $item->mobile }}</td>
                                <td>{{$item->gender}}</td>
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
                    <form method="POST" action="{{ route('admin.customer.store') }}" enctype="multipart/form-data">
                    @csrf
                        <h4 class="page__subtitle">Add New</h4>
                        <div class="form-group mb-3">
                            <label class="label-control">First Name <span class="text-danger">*</span> </label>
                            <input type="text" name="fname" placeholder="" class="form-control" value="{{old('fname')}}">
                            @error('fname') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Last Name <span class="text-danger">*</span> </label>
                            <input type="text" name="lname" placeholder="" class="form-control" value="{{old('lname')}}">
                            @error('lname') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Email <span class="text-danger">*</span> </label>
                            <input type="email" name="email" placeholder="" class="form-control" value="{{old('email')}}">
                            @error('email') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Mobile <span class="text-danger">*</span> </label>
                            <input type="number" name="mobile" placeholder="" class="form-control" value="{{old('mobile')}}">
                            @error('mobile') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Gender <span class="text-danger">*</span> </label>
                            <select class="form-control" name="gender">
                                <option value="" hidden selected>Select...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="trans">Trans</option>
                                <option value="other">Other</option>
                            </select>
                            @error('gender') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-control">Password <span class="text-danger">*</span> </label>
                            <input type="password" name="password" placeholder="" class="form-control" value="{{old('password')}}">
                            @error('password') <p class="small text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-header">
                                Profile Image
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