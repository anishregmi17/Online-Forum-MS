@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Setting Details</h1>
            <div class="form-group">
                <strong>Key:</strong>
                {{ $setting->site_key }}
            </div>
            <div class="form-group">
                <strong>Value:</strong>
                {{ $setting->site_value }}
            </div>

            <a href="{{ route('admin.settings.index') }}" class="btn btn-primary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
