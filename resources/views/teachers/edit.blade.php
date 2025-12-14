@extends('layout')

@section('content')
<div class="header">
    <h1>Edit Teacher</h1>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <form action="{{ route('teachers.update', $teacher->tid) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" value="{{ $teacher->full_name }}" required>
        </div>
        <div class="form-group">
            <label for="tel">Telephone</label>
            <input type="tel" name="tel" id="tel" value="{{ $teacher->tel }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Teacher</button>
    </form>
</div>
@endsection
