@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>About Forums</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('admin.aboutforum.create') }}" class="btn btn-primary mb-3">Create New About Forum</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Text</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aboutforums as $aboutforum)
                            <tr>
                                <td>{{ $aboutforum->id }}</td>
                                <td>{{ $aboutforum->text }}</td>
                                <td>{{ $aboutforum->description }}</td>
                                <td>
                                    <a href="{{ route('admin.aboutforum.show', $aboutforum->id) }}"
                                        class="btn btn-info">View</a>
                                    <a href="{{ route('admin.aboutforum.edit', $aboutforum->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.aboutforum.destroy', $aboutforum->id) }}" method="POST"
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
            </div>
        </div>
    </div>
@endsection
