@extends('backend.layout')

@section('content')
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Update</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

<div class="card shadow mb-4">
    
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Update </h6>
        <a href="{{ route('flowers.index')}}" class="btn btn-primary">Back</a>
    </div>

    <div class="card-body">
        <form action="{{route('flowers.update',$flower->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="flowerName" class="form-control w-50 @error('flowerName') is-invalid @enderror" value="{{$flower->name}}" id="name">
                  @error('flowerName')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="number" name="flowerPrice" class="form-control w-50 @error('flowerPrice') is-invalid @enderror"  id="price" value="{{$flower->price}}">
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
                  <select name="flowerType" class="form-select form-control w-50 @error('flowerType') is-invalid @enderror" value="{{old('flowerType')}}" id="type" value="{{$flower->id}}" >
                    <option selected disabled>Choose...</option>
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
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                  <input type="file" name="flowerImage" class="form-control-file w-50 @error('flowerImage') is-invalid @enderror" id="image">
                  <img src="{{asset($flower->image)}}">
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
                  <textarea name="flowerDescription" rows="10" value="{{$flower->description}}" class="form-control w-50 @error('flowerDescription') is-invalid @enderror" id="description" >{{$flower->description}}</textarea>
                  @error('flowerDescription')
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







