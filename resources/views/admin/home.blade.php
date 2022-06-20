@extends('admin.layouts.app')

@section('page', 'Home')

@section('content')
<section>
    <div class="row">
        <div class="col-sm-3">
            <div class="card home__card bg-gradient-danger">
                <div class="card-body">
                    <h4>No of Customer <i class="fi fi-br-box-alt"></i></h4>
                    {{-- <h2>{{$data->users}}</h2> --}}
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card home__card bg-gradient-info">
                <div class="card-body">
                    <h4>Category <i class="fi fi-br-chart-histogram"></i></h4>
                    {{-- <h2>{{$data->category}}</h2> --}}
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card home__card bg-gradient-success">
                <div class="card-body">
                    <h4>Subcategory <i class="fi fi-br-user"></i></h4>
                    {{-- <h2>{{$data->subcategory}}</h2> --}}
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card home__card bg-gradient-secondary">
                <div class="card-body">
                    <h4>No of Product <i class="fi fi-br-cube"></i></h4>
                    {{-- <h2>{{$data->products->count()}}</h2> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection