@extends('layouts.app')
@section('title', 'About')
@section('content')
    <div style=" margin-top: 20%;">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Display side bar</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Contact IT support</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <img style=" border: 1px solid black; border-radius: 140px;"
                src="{{ asset('images/contact.png') }}"
                alt="an image"
                height="100"
                width="100"/>
            <p>Email: itsupport@yahoo.com</p>
        </div>
        </div>
    </div>
@endsection
