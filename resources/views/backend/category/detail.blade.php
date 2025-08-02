@extends('backend.layout')

@section('title', 'Category Detail - Flower Shop Admin')
@section('page-title', 'Category Details')
@section('page-description', 'View category information and related data.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category: {{ $category->name }}</h6>
        <a href="{{ route('admin.category.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Categories
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Category Information</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>ID:</strong></td>
                        <td>{{ $category->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Created:</strong></td>
                        <td>{{ $category->created_at->format('M d, Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Updated:</strong></td>
                        <td>{{ $category->updated_at->format('M d, Y H:i') }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Related Data</h5>
                <div class="row">
                    <div class="col-6">
                        <div class="card bg-primary text-white">
                            <div class="card-body text-center">
                                <h3>{{ $category->occasitions->count() }}</h3>
                                <p class="mb-0">Occasions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-success text-white">
                            <div class="card-body text-center">
                                <h3>{{ $category->flowers->count() }}</h3>
                                <p class="mb-0">Flowers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
