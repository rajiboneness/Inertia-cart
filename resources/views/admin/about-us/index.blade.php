@extends('admin.layouts.app')

@section('page', 'About Us')

@section('content')
<div class="card-body text-end">
    <a href="{{ route('admin.aboutus.create') }}" class="btn btn-sm btn-danger">Create </a>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>Title</th>
                            <th>Descriptions</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $item)
                        <tr>
                            <td class="text-center column-thumb">
                                <img src="{{ asset($item->image) }}">
                            </td>
                            <td>
                                {{$item->title}}
                                <div class="row__action">
                                    {{-- <a href="{{ route('admin.product.edit', $item->id) }}">Edit</a>
                                    <a href="{{ route('admin.product.view', $item->id) }}">View</a>
                                    <a
                                        href="{{ route('admin.product.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a>
                                    <a href="{{ route('admin.product.delete', $item->id) }}"
                                        class="text-danger">Delete</a> --}}
                                </div>
                            </td>
                            <td> {{$item->desc}}</td>

                            <td>Published<br />{{date('j M Y', strtotime($item->created_at))}}</td>
                            <td><span
                                    class="badge bg-{{($item->status == 1) ? 'success' : 'danger'}}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</span>
                            </td>
                        </tr>
                        {{-- @empty --}}
                        <tr>
                            <td colspan="100%" class="small text-muted">No data found</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<section>
</section>
@endsection
