@extends('backend.layout')

@section('title', 'Create Occasion - Flower Shop Admin')
@section('page-title', 'Create New Occasion')
@section('page-description', 'Add a new special occasion to your shop.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Occasion</h6>
        <a href="{{ route('admin.occations.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Occasions
        </a>
    </div>

    <div class="card-body">
        <form action="{{route('admin.occations.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Occasion Name</label>
                <div class="col-sm-10">
                    <input type="text" name="occationName" class="form-control w-50 @error('occationName') is-invalid @enderror"
                           value="{{old('occationName')}}" id="name" placeholder="Enter occasion name">
                    @error('occationName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price (MMK)</label>
                <div class="col-sm-10">
                    <input type="number" name="occationPrice" class="form-control w-50 @error('occationPrice') is-invalid @enderror"
                           value="{{old('occationPrice')}}" id="price" placeholder="Enter price">
                    @error('occationPrice')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="occationCategory" class="form-select form-control w-50 @error('occationCategory') is-invalid @enderror" id="category">
                        <option selected disabled>Choose a category...</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                {{old('occationCategory') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('occationCategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="occationImage" class="form-control-file w-50 @error('occationImage') is-invalid @enderror"
                           id="image" accept="image/*">
                    <small class="form-text text-muted">Upload an image for this occasion (JPG, PNG, GIF, SVG - Max 2MB)</small>
                    @error('occationImage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="occationDescription" rows="5" class="form-control w-50 @error('occationDescription') is-invalid @enderror"
                              id="description" placeholder="Enter occasion description">{{old('occationDescription')}}</textarea>
                    @error('occationDescription')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>Save Occasion
                    </button>
                    <a href="{{ route('admin.occations.index')}}" class="btn btn-secondary">
                        <i class="fas fa-times mr-2"></i>Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
