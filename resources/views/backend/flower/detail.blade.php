@extends('backend.layout')

@section('content')
 <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Flower Detail</h1>
    <h2> {{( $flower->name)}} </h2>
    <h2> {{( $flower->description)}} </h2>

    
    {{-- images --}}
    <img src="{{ asset($flower->image)}}" alt="Flower Image" class="img-fluid">

@endsection