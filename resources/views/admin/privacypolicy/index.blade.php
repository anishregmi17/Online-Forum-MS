@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Privacy Policies</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('admin.privacypolicy.create') }}" class="btn btn-primary mb-3">Create New Privacy Policy</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($privacypolicies as $privacypolicy)
                        <tr>
                            <td>{{ $privacypolicy->id }}</td>
                            <td>{{ $privacypolicy->title }}</td>
                            <td>{{ Str::limit($privacypolicy->content, 50) }}</td>
                            <td>
                                <a href="{{ route('admin.privacypolicy.show', $privacypolicy->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('admin.privacypolicy.edit', $privacypolicy->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.privacypolicy.destroy', $privacypolicy->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $privacypolicies->links() }}
        </div>
    </div>
</div>
@endsection
