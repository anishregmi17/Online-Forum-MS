@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>{{ $post->title }}</h1>
                <p>Username: {{ $post->username }}</p>
                <p>{{ $post->description }}</p>
                <img src="{{ asset($post->image) }}" width="300">
                <img src="{{ asset($post->profileimage) }}" width="100">
            </div>
        </div>
    </div>
@endsection
