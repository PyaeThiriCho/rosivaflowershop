@extends('backend.layout')

@section('title', 'Flowers - Flower Shop Admin')
@section('page-title', 'Flowers Management')
@section('page-description', 'Manage all flowers in your shop.')

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
            <h6 class="m-0 font-weight-bold text-primary">All Flowers</h6>
            <a href="{{ route('admin.flowers.create')}}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>Add Flower
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
                            <th>Type</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($flowers as $flower)
                        <tr>
                            <td>{{ $flower->id }}</td>
                            <td>{{ $flower->name }}</td>
                            <td>{{ number_format($flower->price) }} MMK</td>
                            <td>{{ $flower->type->name ?? 'N/A' }}</td>
                            <td>{{ $flower->category->name ?? 'N/A' }}</td>
                            <td>
                                @if($flower->image)
                                    <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}"
                                         style="width: 50px; height: 50px; object-fit: cover;" class="rounded">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.flowers.show',$flower->id)}}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <a href="{{ route('admin.flowers.edit', $flower->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.flowers.destroy',$flower->id)}}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this flower?')">
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
