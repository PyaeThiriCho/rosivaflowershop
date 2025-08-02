@extends('backend.layout')

@section('title', 'Types - Flower Shop Admin')
@section('page-title', 'Types Management')
@section('page-description', 'Manage all flower types in your shop.')

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
            <h6 class="m-0 font-weight-bold text-primary">All Types</h6>
            <a href="{{ route('admin.types.create')}}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>Add Type
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Flowers</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->flowers->count()}}</td>
                            <td>
                                <a href="{{ route('admin.types.edit', $type->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('admin.types.show', $type->id)}}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <form action="{{ route('admin.types.destroy',$type->id)}}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf

                                    {{-- Delete condition --}}
                                    @if($type->flowers->count()==0)
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this type?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger" disabled title="Cannot delete type with related flowers">
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
