@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>footer Details</h1>
            <div class="form-group">
                <strong>Title:</strong>
                {{ $footer->title }}
            </div>

            <a href="{{ route('admin.footers.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
