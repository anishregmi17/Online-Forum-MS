@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Content Policies</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('admin.contentpolicy.create') }}" class="btn btn-primary mb-3">Create New Content Policy</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contentPolicies as $contentPolicy)
                        <tr>
                            <td>{{ $contentPolicy->id }}</td>
                            <td>{{ $contentPolicy->title }}</td>
                            <td>
                                <a href="{{ route('admin.contentpolicy.show', $contentPolicy->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('admin.contentpolicy.edit', $contentPolicy->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.contentpolicy.destroy', $contentPolicy->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $contentPolicies->links() }}
        </div>
    </div>
</div>
@endsection
