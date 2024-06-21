@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>{{ $useragreement->title }}</h1>
            <p>{{ $useragreement->content }}</p>
            <a href="{{ route('admin.useragreements.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
