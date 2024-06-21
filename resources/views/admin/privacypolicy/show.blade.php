@extends('admin.layouts.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $privacypolicy->title }}</h1>
            <p>{{ $privacypolicy->content }}</p>
        </div>
    </div>
</div>
@endsection
