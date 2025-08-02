@extends('backend.layout')

@section('title', 'Flower Detail - Flower Shop Admin')
@section('page-title', 'Flower Details')
@section('page-description', 'View flower information and related data.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Flower: {{ $flower->name }}</h6>
        <a href="{{ route('admin.flowers.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Flowers
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Flower Information</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>ID:</strong></td>
                        <td>{{ $flower->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{{ $flower->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Price:</strong></td>
                        <td>{{ number_format($flower->price) }} MMK</td>
                    </tr>
                    <tr>
                        <td><strong>Type:</strong></td>
                        <td>{{ $flower->type->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Category:</strong></td>
                        <td>{{ $flower->category->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Description:</strong></td>
                        <td>{{ $flower->description }}</td>
                    </tr>
                    <tr>
                        <td><strong>Created:</strong></td>
                        <td>{{ $flower->created_at->format('M d, Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Updated:</strong></td>
                        <td>{{ $flower->updated_at->format('M d, Y H:i') }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Flower Image</h5>
                @if($flower->image)
                    <img src="{{ asset($flower->image)}}" alt="{{ $flower->name }}" class="img-fluid rounded">
                @else
                    <div class="text-center text-muted">
                        <i class="fas fa-image fa-3x mb-3"></i>
                        <p>No image available</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
