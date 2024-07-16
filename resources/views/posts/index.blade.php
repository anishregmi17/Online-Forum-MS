@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>Posts</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create New Post</a>
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
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><img src="{{ asset($post->profileimage) }}" width="50"></td>
                                <td>{{ $post->username }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td><img src="{{ asset($post->image) }}" width="50"></td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
