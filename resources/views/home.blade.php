@extends('layout.app')

@section('content')

@if (session('success'))
    <div class="col-12">
        <div class="alert alert-info text-center">
            {{ session('success') }}
        </div>
    </div>
@endif


@if (session('update'))
<div class="alert alert-info">
    {{ session('update') }}
</div>
@endif

@if (session('delete'))
<div class="alert alert-info">
    {{ session('delete') }}
</div>
@endif
<div class="row justify-content-center align-items-center">

     <div class="col-12">
         <div class="d-flex justify-content-between align-items-center">
             <h1 class="text-center display-4 ">Product's</h1>
             <a href="{{ route('addProduct') }}" class="btn btn-primary">Add Product</a>
            </div>
        @foreach ($products as $product)            
        <div class="jumbotron">
            <a href="{{ route('showProduct',['id'=>$product->id]) }}">
                <h1>{{ $product->name }}</h1>
            </a>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }}</p>
            <a href="{{ route('editProduct', ['id'=>$product->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('destroyProduct',['id'=>$product->id]) }}" class="btn btn-danger">Delete</a>
        </div>
            @endforeach
    </div>
</div>
@endsection