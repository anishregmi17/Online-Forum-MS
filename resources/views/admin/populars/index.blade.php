@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>Popular Items</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('admin.populars.create') }}" class="btn btn-primary mb-3">Create New Popular Item</a>
                <table class="table table-bordered">
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
                        @foreach ($populars as $popular)
                            <tr>
                                <td>{{ $popular->id }}</td>
                                <td><img src="{{ asset($popular->profileimage) }}" width="50"></td>
                                <td>{{ $popular->username }}</td>
                                <td>{{ $popular->title }}</td>
                                <td>{{ $popular->description }}</td>
                                <td><img src="{{ asset($popular->image) }}" width="50"></td>
                                <td>
                                    <a href="{{ route('admin.populars.show', $popular->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('admin.populars.edit', $popular->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.populars.destroy', $popular->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $populars->links() }}
            </div>
        </div>
    </div>
@endsection
