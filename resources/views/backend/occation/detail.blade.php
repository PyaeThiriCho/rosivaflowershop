@extends('backend.layout')

@section('title', 'Occasion Detail - Flower Shop Admin')
@section('page-title', 'Occasion Details')
@section('page-description', 'View occasion information and related data.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Occasion: {{ $occation->name }}</h6>
        <a href="{{ route('admin.occations.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Occasions
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Occasion Information</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>ID:</strong></td>
                        <td>{{ $occation->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{{ $occation->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Price:</strong></td>
                        <td>{{ number_format($occation->price) }} MMK</td>
                    </tr>
                    <tr>
                        <td><strong>Category:</strong></td>
                        <td>{{ $occation->category->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Description:</strong></td>
                        <td>{{ $occation->description }}</td>
                    </tr>
                    <tr>
                        <td><strong>Created:</strong></td>
                        <td>{{ $occation->created_at->format('M d, Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Updated:</strong></td>
                        <td>{{ $occation->updated_at->format('M d, Y H:i') }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Occasion Image</h5>
                @if($occation->image)
                    <img src="{{ asset($occation->image)}}" alt="{{ $occation->name }}" class="img-fluid rounded">
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
