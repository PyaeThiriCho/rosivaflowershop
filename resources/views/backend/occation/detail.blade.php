@extends('backend.layout')

@section('content')
 <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Book Detail</h1>
    <h2> {{( $occation->name)}} </h2>
    <h2> {{( $occation->description)}} </h2>

    
    {{-- images --}}
    <img src="{{ asset($occation->image)}}" alt="Book Image" class="img-fluid">

@endsection