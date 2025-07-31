@extends('backend.layout')

@section('content')
  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Occation Create</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

<div class="card shadow mb-4">
    
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create occations</h6>
        <a href="{{ route('occations.index')}}" class="btn btn-primary">Back</a>
    </div>

    <div class="card-body">
        <form action="{{route('occations.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="occationName" class="form-control w-50 @error('occationName') is-invalid @enderror" value="{{old('occationName')}}" id="name" placeholder="...">
                  @error('occationName')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="number" name="occationPrice" class="form-control w-50 @error('occationPrice') is-invalid @enderror" value="{{old('occationPrice')}}" id="price" placeholder="...">
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
                    <option selected disabled>Choose...</option>
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
                  <input type="file" name="occationImage" class="form-control-file w-50 @error('occationImage') is-invalid @enderror" value="{{old('occationImage')}}" id="image" placeholder="...">
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
                  <textarea name="occationDescription" rows="10" class="form-control w-50 @error('occationDescription') is-invalid @enderror" id="description">{{old('occationDescription')}}</textarea>
                  @error('occationDescription')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection