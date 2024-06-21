@extends('admin.layouts.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $aboutforum->text }}</h1>
            <p>{{ $aboutforum->description }}</p>
        </div>
    </div>
</div>
@endsection
