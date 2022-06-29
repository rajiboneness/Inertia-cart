@extends('admin.layouts.app')

    @section('page', 'Products')

    @section('content')
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
                <th>collection</th>
                <th>Category</th>
                <th>Price</th>
                <th>Date</th>
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
                        <img src="{{ asset($item->image) }}">
                    </td>
                    <td>
                        {{$item->name}}
                        <div class="row__action">
                            <a href="{{ route('admin.product.edit', $item->id) }}">Edit</a>
                            <a href="{{ route('admin.product.view', $item->id) }}">View</a>
                            <a href="{{ route('admin.product.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a>
                            <a href="{{ route('admin.product.delete', $item->id) }}" class="text-danger">Delete</a>
                        </div>
                    </td>
                    <td>{{$item->collection ? $item->collection->name : ''}}</td>
                    <td>{{$item->category ? $item->category->name : ''}} > {{$item->subCategory ? $item->subCategory->name : 'NA'}}</td>
                    <td>
                        <small> <del>{{$item->price}}</del> </small> Rs. {{$item->offer_price}}
                    </td>
                    {{-- <td>
                        <a href="{{ route('admin.product.sale', $item->id) }}" class="text-decoration-none">
                            @if ($item->saleDetails)
                                <span class="text-success fw-bold"> <i class="fi-br-check"></i> SALE</span>
                            @else
                                <span class="text-danger fw-bold single-line"> <i class="fi-br-plus"></i> SALE</span>
                            @endif
                        </a>
                    </td> --}}
                    <td>Published<br/>{{date('j M Y', strtotime($item->created_at))}}</td>
                    <td><span class="badge bg-{{($item->status == 1) ? 'success' : 'danger'}}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</span></td>
                </tr>
                @empty
                <tr><td colspan="100%" class="small text-muted">No data found</td></tr>
                @endforelse
            </tbody>
        </table>
    <section>
</section>
@endsection