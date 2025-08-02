@extends('backend.layout')

@section('title', 'Create Flower - Flower Shop Admin')
@section('page-title', 'Create New Flower')
@section('page-description', 'Add a new flower to your shop.')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Flower</h6>
        <a href="{{ route('admin.flowers.index')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left mr-2"></i>Back to Flowers
        </a>
    </div>

    <div class="card-body">
        <form action="{{route('admin.flowers.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Flower Name</label>
                <div class="col-sm-10">
                    <input type="text" name="flowerName" class="form-control w-50 @error('flowerName') is-invalid @enderror"
                           value="{{old('flowerName')}}" id="name" placeholder="Enter flower name">
                    @error('flowerName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price (MMK)</label>
                <div class="col-sm-10">
                    <input type="number" name="flowerPrice" class="form-control w-50 @error('flowerPrice') is-invalid @enderror"
                           value="{{old('flowerPrice')}}" id="price" placeholder="Enter price">
                    @error('flowerPrice')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select name="flowerType" class="form-select form-control w-50 @error('flowerType') is-invalid @enderror" id="type">
                        <option selected disabled>Choose a type...</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}"
                                {{old('flowerType') == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                        @endforeach
                    </select>
                    @error('flowerType')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="flowerCategory" class="form-select form-control w-50 @error('flowerCategory') is-invalid @enderror" id="category">
                        <option selected disabled>Choose a category...</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                {{old('flowerCategory') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('flowerCategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="flowerImage" class="form-control-file w-50 @error('flowerImage') is-invalid @enderror"
                           id="image" accept="image/*">
                    <small class="form-text text-muted">Upload an image for this flower (JPG, PNG, GIF, SVG - Max 2MB)</small>
                    @error('flowerImage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="flowerDescription" rows="5" class="form-control w-50 @error('flowerDescription') is-invalid @enderror"
                              id="description" placeholder="Enter flower description">{{old('flowerDescription')}}</textarea>
                    @error('flowerDescription')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>Save Flower
                    </button>
                    <a href="{{ route('admin.flowers.index')}}" class="btn btn-secondary">
                        <i class="fas fa-times mr-2"></i>Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
