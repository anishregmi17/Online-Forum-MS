@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Edit Community</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.communities.update', $community->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $community->title }}" required>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ $community->icon }}" required>
                </div>
                <button type="submit" class="btn btn-success">Update Community</button>
            </form>
        </div>
    </div>
</div>
@endsection