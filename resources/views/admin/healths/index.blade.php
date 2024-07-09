@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>Healths</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('admin.healths.create') }}" class="btn btn-primary">Create New Health</a>
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
                        @foreach($healths as $health)
                            <tr>
                                <td>{{ $health->id }}</td>
                                <td><img src="{{ asset($health->profileimage) }}" width="50"></td>
                                <td>{{ $health->username }}</td>
                                <td>{{ $health->title }}</td>
                                <td>{{ $health->description }}</td>
                                <td><img src="{{ asset($health->image) }}" width="50"></td>
                                <td>
                                    <a href="{{ route('admin.healths.show', $health->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('admin.healths.edit', $health->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.healths.destroy', $health->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $healths->links() }}
            </div>
        </div>
    </div>
@endsection
