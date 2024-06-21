@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>User Agreements</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('admin.useragreements.create') }}" class="btn btn-primary mb-3">Create New User Agreement</a>
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
                    @foreach($useragreements as $useragreement)
                        <tr>
                            <td>{{ $useragreement->id }}</td>
                            <td>{{ $useragreement->title }}</td>
                            <td>{{ Str::limit($useragreement->content, 50) }}</td>
                            <td>
                                <a href="{{ route('admin.useragreements.show', $useragreement->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('admin.useragreements.edit', $useragreement->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.useragreements.destroy', $useragreement->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $useragreements->links() }}
        </div>
    </div>
</div>
@endsection
