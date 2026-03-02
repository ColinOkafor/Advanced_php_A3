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

    @foreach ($items as $item)
      <tr>
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
    </tr>
    @endforeach

 
   
   
  </tbody>
</table>
<a href="{{ route('manage', ['showForm' => true]) }}">Create new</a>
@if($showForm)
<div style="margin: 10%; border:1px solid black; padding: 2% ">
    <form method="POST" action="{{route('manage.store')}}">
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
    <a href="{{ route('manage') }}"> Close form</a>

</div>
@endif
@endsection
