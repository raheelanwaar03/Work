@extends('layout.app')

@section('title')
    AddProduct
@endsection
@section('content')
    
            <div class="col-12">

                <h1 class="text-center display-4 text-info">Add Pruduct</h1>
    <hr style="width: 300px">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('saveProduct') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Type Product Name">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control" placeholder="Type Product Price">
                            </div>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea><br>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection