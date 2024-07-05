@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>Technologies</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">Create New Technology</a>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Profile Image</th>
                            <th>Username</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($technologies as $technology)
                            <tr>
                                <td>{{ $technology->id }}</td>
                                <td><img src="{{ asset($technology->profileimage) }}" width="50"></td>
                                <td>{{ $technology->username }}</td>
                                <td>{{ $technology->title }}</td>
                                <td>{{ $technology->description }}</td>
                                <td><img src="{{ asset($technology->image) }}" width="50"></td>
                                <td>
                                    <a href="{{ route('admin.technologies.show', $technology->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $technologies->links() }}
            </div>
        </div>
    </div>
@endsection
