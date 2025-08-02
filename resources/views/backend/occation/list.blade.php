@extends('backend.layout')

@section('title', 'Occasions - Flower Shop Admin')
@section('page-title', 'Occasions Management')
@section('page-description', 'Manage all special occasions and events in your shop.')

@section('content')
    {{-- success message --}}
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Occasions</h6>
            <a href="{{ route('admin.occations.create')}}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>Add Occasion
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($occations as $occation)
                        <tr>
                            <td>{{ $occation->id }}</td>
                            <td>{{ $occation->name }}</td>
                            <td>{{ number_format($occation->price) }} MMK</td>
                            <td>{{ $occation->category->name ?? 'N/A' }}</td>
                            <td>
                                @if($occation->image)
                                    <img src="{{ asset($occation->image) }}" alt="{{ $occation->name }}"
                                         style="width: 50px; height: 50px; object-fit: cover;" class="rounded">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.occations.show',$occation->id)}}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <a href="{{ route('admin.occations.edit', $occation->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.occations.destroy',$occation->id)}}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this occasion?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
