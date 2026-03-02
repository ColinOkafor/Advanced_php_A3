@extends('layouts.app')
@section('title', 'search')
@section('content')
    <div class="mx-auto p-2" style="background-color: #e8e8e8f8; border-radius:3%; align-items:center; width:55%; ">
        <form action="{{  route('search', ['showForm' => true]) }}" method="GET" style="display:inline;">
                @csrf
            <div class="input-group mb-3" >
                <span class="input-group-text">Name</span>
                <input type="text" name="name" class="form-control" placeholder="" aria-label="name of product" aria-describedby="button-addon1">
            </div>
            <br/>
            <div class="input-group mb-3">
                <span class="input-group-text">high</span>
                <input type="text" name="high" class="form-control" placeholder="" aria-label="Highest price range" aria-describedby="button-addon1">
            </div>
            <br/>

            <div class="input-group mb-3">
                <span class="input-group-text">low</span>
                <input type="text" name="low" class="form-control" placeholder="" aria-label="lowest price range" aria-describedby="button-addon1">
            </div>
      
            <br/>
            <button class="btn btn-outline-secondary p-3" type="submit" id="button-addon1" style="margin-left:60%;">Search</button>
        </form>    
    </div>


    @if($showForm)
    <div style="margin: 10%; border:1px solid black; padding: 2%; background-color: #e8e8e8f8; ">
        <form method="GET">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="product_code" class="form-label">Product_code</label>
                <input type="text" class="form-control" name="product_code" id="product_code">
            </div>
            <button type="submit" class="btn btn-primary" onlick="alert('Row added')">Submit</button>
        </form>
        </br>
        <a href="{{ route('search') }}"> Close form</a>

    </div>
    @endif
@endsection
