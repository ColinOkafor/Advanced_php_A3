@extends('layouts.app')
@section('title', 'search')
@section('content')

    @csrf
    <div class="mx-auto p-2" style="background-color: #e8e8e8f8; border-radius:3%; align-items:center; width:55%; ">
        <div class="input-group mb-3" >
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" placeholder="" aria-label="name of product" aria-describedby="button-addon1">
        </div>
        <br/>
         <div class="input-group mb-3">
            <span class="input-group-text">high</span>
            <input type="text" class="form-control" placeholder="" aria-label="Highest price range" aria-describedby="button-addon1">
        </div>
         <br/>

        <div class="input-group mb-3">
            <span class="input-group-text">low</span>
            <input type="text" class="form-control" placeholder="" aria-label="lowest price range" aria-describedby="button-addon1">
        </div>
        <br/>

        <button class="btn btn-outline-secondary p-3" type="button" id="button-addon1" style="margin-left:60%;">Button</button>

    </div>
@endsection
