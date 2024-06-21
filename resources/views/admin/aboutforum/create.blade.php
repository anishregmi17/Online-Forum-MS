@extends('admin.layouts.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create About Forum</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.aboutforum.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" name="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Create About Forum</button>
            </form>
        </div>
    </div>
</div>
@endsection
