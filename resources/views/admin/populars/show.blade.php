@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>{{ $popular->title }}</h1>
                <p>Username: {{ $popular->username }}</p>
                <p>{{ $popular->description }}</p>
                <img src="{{ asset($popular->image) }}" width="300">
                <img src="{{ asset($popular->profileimage) }}" width="100">
            </div>
        </div>
    </div>
@endsection
