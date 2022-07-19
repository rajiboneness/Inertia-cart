@extends('admin.layouts.app')

@section('page', 'Home')

@section('content')
<section>
    <div class="row">
        <div class="col-sm-3">
            <div class="card home__card bg-gradient-danger">
                <div class="card-body">
                    <h4>No of Collection <i class="fi fi-br-box-alt"></i></h4>
                    <h2>{{$data->collection}}</h2>
                </div>
            </div>
        </div>
        
        <div class="col-sm-3">
            <div class="card home__card bg-gradient-info">
                <div class="card-body">
                    <h4>Category <i class="fi fi-br-chart-histogram"></i></h4>
                    <h2>{{$data->category}}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card home__card bg-gradient-success">
                <div class="card-body">
                    <h4>Subcategory <i class="fi fi-br-user"></i></h4>
                    <h2>{{$data->subcategory}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card home__card bg-gradient-danger">
                <div class="card-body">
                    <h4>No of User <i class="fi fi-br-box-alt"></i></h4>
                    <h2>{{$data->users->count()}}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card home__card bg-gradient-secondary">
                <div class="card-body">
                    <h4>No of Product <i class="fi fi-br-cube"></i></h4>
                    <h2>{{$data->products->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-sm-6">
            <h5>Products List</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center"><i class="fi fi-br-picture"></i></th>
                        <th>Name</th>
                        <th>Collection</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->products as $product)
                        <tr>
                            <td class="text-center column-thumb">
                                <img src="{{asset($product->image)}}">
                            </td>
                            <td>
                                <p style="height: 42px;overflow: hidden;text-overflow: ellipsis;margin-bottom: 0;">{{$product->name}}</p>
                                <div class="row__action">
                                    <a href="{{ route('admin.product.edit', $product->id) }}">Edit</a>
                                    <a href="{{ route('admin.product.view', $product->id) }}">View</a>
                                </div>
                            </td>
                            <td>{{$product->collection->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>Rs. {{$product->offer_price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h5>Users List</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th><i class="fi fi-br-picture"></i></th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->users as $user)
                        <tr>
                            <td class="text-center column-thumb">
                                <img src="{{asset($user->image)}}">
                            </td>
                            <td>
                                <p style="height: 42px;overflow: hidden;text-overflow: ellipsis;margin-bottom: 0;">{{$user->name}}</p>
                                <div class="row__action">
                                    <a href="{{ route('admin.customer.view', $user->id) }}">Edit</a>
                                    <a href="{{ route('admin.customer.view', $user->id) }}">View</a>
                                </div>
                            </td>
                            <td>{{ $user->email }} <br> {{$user->mobile}}</td>
                            <td><span class="badge bg-{{($user->status == 1) ? 'success' : 'danger'}}">{{($user->status == 1) ? 'Active' : 'Inactive'}}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection