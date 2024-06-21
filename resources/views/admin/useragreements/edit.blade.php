@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Edit User Agreement</h1>
            <form action="{{ route('admin.useragreements.update', $useragreement->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $useragreement->title }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" rows="5" required>{{ $useragreement->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
