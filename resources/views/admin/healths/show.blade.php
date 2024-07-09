@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>{{ $health->title }}</h1>
                <p>Username: {{ $health->username }}</p>
                <p>{{ $health->description }}</p>
                <img src="{{ asset($health->image) }}" width="300">
                <img src="{{ asset($health->profileimage) }}" width="100">
            </div>
        </div>
    </div>
@endsection
