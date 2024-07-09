@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Sport Details</h1>
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset($sport->profileimage) }}" width="100" alt="Profile Image">
                        <h2>{{ $sport->username }}</h2>
                        <h3>{{ $sport->title }}</h3>
                        <p>{{ $sport->description }}</p>
                        <img src="{{ asset($sport->image) }}" width="100" alt="Image">
                    </div>
                </div>
                <a href="{{ route('admin.sports.index') }}" class="btn btn-primary mt-3">Back to Sports</a>
            </div>
        </div>
    </div>
@endsection
