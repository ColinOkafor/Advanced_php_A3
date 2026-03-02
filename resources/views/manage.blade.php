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
      <th scope="row">1</th>
      <td>LG 18.5 Inch Flat Frame monitor 
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
      <td>A monitor
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
      <td>DC5567
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
      <td>59.99
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
   
   
  </tbody>
</table>

<p><a href = "#">create new</a></p>

@endsection
