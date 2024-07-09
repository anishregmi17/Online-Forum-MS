@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>Edit Health</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.healths.update', $health->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="profileimage">Profile Image</label>
                        <input type="file" name="profileimage" class="form-control">
                        <img src="{{ asset($health->profileimage) }}" width="100">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ $health->username }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $health->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" required>{{ $health->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset($health->image) }}" width="100">
                    </div>
                    <button type="submit" class="btn btn-success">Update Health</button>
                </form>
            </div>
        </div>
    </div>
@endsection
