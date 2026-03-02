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
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->product_code}}</td>
      <td>{{$item->price}}
         &nbsp;
         <form action="{{ route('manage.edit', $item->id) }}" method="GET" style="display:inline;">
            @csrf
            <button type="submit" >
                <img src="{{ asset('images/edit.png') }}" height="25" width="25" style="pointer-events:none; display:block;">
            </button>
        </form>
        
         <form action="{{ route('manage.delete', $item->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" >
                <img src="{{ asset('images/delete.png') }}" height="25" width="25" style="pointer-events:none; display:block;">
            </button>
        </form>
      </td>
    </tr>
    @endforeach

 
   
   
  </tbody>
</table>
<a href="{{ route('manage', ['showForm' => true]) }}">Create new</a>
@if($showForm)
<div style="margin: 10%; border:1px solid black; padding: 2%; background-color: #e8e8e8f8; ">
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

@if(isset($editItem))
<div class="modal fade show" style="display:block; background:rgba(0,0,0,0.5);">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('manage.update', $editItem->id) }}">
      @csrf

      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Edit Item</h5>
          <a href="{{ route('manage') }}" class="btn-close"></a>
        </div>

        <div class="modal-body">

          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $editItem->name }}">
          </div>

          <div class="mb-3">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{ $editItem->description }}">
          </div>

          <div class="mb-3">
            <label>Product Code</label>
            <input type="text" class="form-control" name="product_code" value="{{ $editItem->product_code }}">
          </div>

          <div class="mb-3">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{ $editItem->price }}">
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

      </div>
    </form>
  </div>
</div>
@endif
@endsection
