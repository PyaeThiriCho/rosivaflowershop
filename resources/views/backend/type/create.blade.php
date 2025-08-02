@extends('backend.layout')

@section('title', 'Create Type - Flower Shop Admin')
@section('page-title', 'Create New Type')
@section('page-description', 'Add a new flower type to your shop.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Type</h6>
        <a href="{{ route('admin.types.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Types
        </a>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.types.store')}}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Type Name</label>
                <div class="col-sm-10">
                    <input type="text" name="typeName" class="form-control w-50 @error('typeName') is-invalid @enderror"
                           id="name" placeholder="Enter type name" value="{{ old('typeName') }}">
                    @error('typeName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>Save Type
                    </button>
                    <a href="{{ route('admin.types.index')}}" class="btn btn-secondary">
                        <i class="fas fa-times mr-2"></i>Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
