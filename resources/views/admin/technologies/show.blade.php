@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>{{ $technology->title }}</h1>
                <p>Username: {{ $technology->username }}</p>
                <p>{{ $technology->description }}</p>
                <img src="{{ asset($technology->image) }}" width="300">
                <img src="{{ asset($technology->profileimage) }}" width="100">
            </div>
        </div>
    </div>
@endsection
