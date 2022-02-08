@extends('layout.app')

@section('content')
     <div class="col-12">
         <div class="d-flex justify-content-between align-items-center">
             <h1 class="text-center display-4 ">Product Details</h1>
             <a href="{{ route('addProduct') }}" class="btn btn-primary">New Product</a>
             <a href="{{ route('home')}}" class="btn btn-primary">Main Page</a>
            </div>
        <div class="jumbotron">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }}</p>
            <p>{{ $product->created_at }}</p>
            <a href="{{ route('editProduct', $product->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('destroyProduct',$product->id) }}" class="btn btn-danger">Delete</a>
        </div>
    </div>
@endsection