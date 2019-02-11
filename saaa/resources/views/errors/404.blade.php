
@php
$menu = App\Menu::all()->toArray();
@endphp

@extends('master')
@section('content')

<div class="container text-center">
    <div class="error-404">
    <i class="material-icons">error</i>
    <h4 class="text-uppercase">Oops, page not found.</h4>
    <p>
        It looks like nothing was found at this location. Click the link below to return home
    </p>
    <a href="{{ url('./') }}" class="btn btn-link">Go to home <i class="fa fa-long-arrow-right"></i></a>
</div>
</div>

@endsection
