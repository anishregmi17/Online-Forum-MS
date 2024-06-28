@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1>Settings</h1>

            <a href="{{ route('admin.settings.create') }}" class="btn btn-success mb-3">Create New Setting</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($settings->isEmpty())
                <div class="alert alert-info">
                    No settings found.
                </div>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings as $setting)
                            <tr>
                                <td>{{ $setting->site_key }}</td>
                                <td>{{ $setting->site_value }}</td>
                                <td>
                                    <a href="{{ route('admin.settings.show', $setting->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('admin.settings.edit', $setting->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.settings.destroy', $setting->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this setting?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
