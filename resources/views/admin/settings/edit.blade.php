@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Edit Setting</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="site_key">Key</label>
                    <input type="text" name="site_key" class="form-control @error('site_key') is-invalid @enderror" value="{{ old('site_key', $setting->site_key) }}" required>
                    @error('site_key')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="site_value">Value</label>
                    <input type="text" name="site_value" class="form-control @error('site_value') is-invalid @enderror" value="{{ old('site_value', $setting->site_value) }}" required>
                    @error('site_value')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Update Setting</button>
            </form>
        </div>
    </div>
</div>
@endsection
