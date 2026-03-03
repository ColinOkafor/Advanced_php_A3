@extends('layouts.app')
@section('title', 'search')
@section('content')
    <div class="mx-auto p-2" style="background-color: #e8e8e8f8; border-radius:3%; width:55%;">

       <form action="{{ route('search') }}" method="GET">

            <div class="input-group mb-3">
                <span class="input-group-text">Name</span>
                <input type="text" name="name" class="form-control" value="{{ request('name') }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">High</span>
                <input type="number" name="high" class="form-control" value="{{ request('high') }}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Low</span>
                <input type="number" name="low" class="form-control" value="{{ request('low') }}">
            </div>

            <button class="btn btn-outline-secondary p-3" type="submit" style="margin-left:60%;">
                Search
            </button>

        </form>

    </div>

    @if($hasSearch)
        @if($results->count() > 0)

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Product Code</th>
                    <th>Price</th>
                </tr>
            </thead>

            <tbody>
                @foreach($results as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->product_code }}</td>
                        <td>{{ $item->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p class="mt-4">No products found for your search.</p>
    @endif
@endif
@endsection
