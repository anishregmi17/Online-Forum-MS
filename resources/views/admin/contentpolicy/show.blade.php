@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>{{ $contentPolicy->title }}</h1>
            <p>{{ $contentPolicy->content }}</p>
        </div>
    </div>
</div>
@endsection
