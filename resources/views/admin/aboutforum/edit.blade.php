@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Edit About Forum</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.aboutforum.update', $aboutforum->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" name="text" class="form-control" value="{{ $aboutforum->text }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" required>{{ $aboutforum->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update About Forum</button>
            </form>
        </div>
    </div>
</div>
@endsection
