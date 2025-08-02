@extends('backend.layout')

@section('title', 'Categories - Flower Shop Admin')
@section('page-title', 'Categories Management')
@section('page-description', 'Manage all flower categories in your shop.')

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
            <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
            <a href="{{ route('admin.category.create')}}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>Add Category
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Occasions</th>
                            <th>Flowers</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->occasitions->count()}}</td>
                            <td>{{ $category->flowers->count()}}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('admin.category.show', $category->id)}}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <form action="{{ route('admin.category.destroy',$category->id)}}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf

                                    {{-- Delete condition --}}
                                    @if($category->occasitions->count()==0 && $category->flowers->count()==0)
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger" disabled title="Cannot delete category with related data">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    @endif
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
