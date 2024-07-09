@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>Sports</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('admin.sports.create') }}" class="btn btn-primary">Create New Sport</a>
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
                        @foreach ($sports as $sport)
                            <tr>
                                <td>{{ $sport->id }}</td>
                                <td><img src="{{ asset($sport->profileimage) }}" width="50"></td>
                                <td>{{ $sport->username }}</td>
                                <td>{{ $sport->title }}</td>
                                <td>{{ $sport->description }}</td>
                                <td><img src="{{ asset($sport->image) }}" width="50"></td>
                                <td>
                                    <a href="{{ route('admin.sports.show', $sport->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('admin.sports.edit', $sport->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.sports.destroy', $sport->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sports->links() }} <!-- Pagination links -->
            </div>
        </div>
    </div>
@endsection
