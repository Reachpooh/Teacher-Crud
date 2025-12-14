@extends('layout')

@section('content')
<div class="header">
    <h1>Teacher Details</h1>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="form-group">
        <label>TID</label>
        <p>{{ $teacher->tid }}</p>
    </div>
    <div class="form-group">
        <label>Full Name</label>
        <p>{{ $teacher->full_name }}</p>
    </div>
    <div class="form-group">
        <label>Telephone</label>
        <p>{{ $teacher->tel }}</p>
    </div>
    <div class="actions">
        <a href="{{ route('teachers.edit', $teacher->tid) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('teachers.destroy', $teacher->tid) }}" method="POST" onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection
