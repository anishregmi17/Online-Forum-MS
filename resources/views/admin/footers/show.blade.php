@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Footer Details</h1>
            <div class="form-group">
                <strong>Title:</strong>
                <p>{{ $footer->title }}</p>
            </div>

            <a href="{{ route('admin.footers.index') }}" class="btn btn-primary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
