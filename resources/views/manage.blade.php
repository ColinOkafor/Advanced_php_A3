@extends('layouts.app')
@section('title', 'Manage')
@section('content')
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Product Code</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($items as $item)
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}
        &nbsp;
         <img id="edit"
            src="{{ asset('images/edit.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
         <img id="delete"
            src="{{ asset('images/delete.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
      </td>
      <td>{{$item->description}}
         &nbsp;
         <img id="edit"
            src="{{ asset('images/edit.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
         <img id="delete"
            src="{{ asset('images/delete.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
      </td>
      <td>{{$item->product_code}}
         &nbsp;
         <img id="edit"
            src="{{ asset('images/edit.png') }}"
            alt="an image"
            height="25"
            width="25"
            onclick="alert('item edited')"
        />
         <img id="delete"
            src="{{ asset('images/delete.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
      </td>
      <td>{{$item->price}}
         &nbsp;
         <img id="edit"
            src="{{ asset('images/edit.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
         <img id="delete"
            src="{{ asset('images/delete.png') }}"
            alt="an image"
            height="25"
            width="25"
        />
      </td>
    @endforeach

    </tr>
   
   
  </tbody>
</table>
<a href="{{ route('manage', ['showForm' => true]) }}">Create new</a>
@if($showForm)
<div style="margin: 10%; border:1px solid black; padding: 2% ">
    <form method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="description" class="form-control" id="description">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="price" class="form-control" id="price">
    </div>
    <div class="mb-3">
        <label for="product_code" class="form-label">Product_code</label>
        <input type="product_code" class="form-control" id="product_code">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </br>
    <a href="{{ route('manage') }}"> Close form</a>

</div>
@endif
@endsection
