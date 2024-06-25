@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Communities</h1>

            <a href="{{ route('admin.communities.create') }}" class="btn btn-success mb-3">Create New Community</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($communities as $community)
                        <tr>
                            <td>{{ $community->title }}</td>
                            <td>{{ $community->icon }}</td>
                            <td>
                                <a href="{{ route('admin.communities.show', $community->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('admin.communities.edit', $community->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.communities.destroy', $community->id) }}" method="POST" style="display:inline">
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
