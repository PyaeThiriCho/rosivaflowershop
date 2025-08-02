@extends('backend.layout')

@section('title', 'Type Detail - Flower Shop Admin')
@section('page-title', 'Type Details')
@section('page-description', 'View type information and related data.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Type: {{ $type->name }}</h6>
        <a href="{{ route('admin.types.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Types
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Type Information</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>ID:</strong></td>
                        <td>{{ $type->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{{ $type->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Created:</strong></td>
                        <td>{{ $type->created_at->format('M d, Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Updated:</strong></td>
                        <td>{{ $type->updated_at->format('M d, Y H:i') }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Related Data</h5>
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h3>{{ $type->flowers->count() }}</h3>
                        <p class="mb-0">Flowers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
