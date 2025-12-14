@extends('layout')

@section('content')
<div class="header">
    <h1>Add Teacher</h1>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" required>
        </div>
        <div class="form-group">
            <label for="tel">Telephone</label>
            <input type="tel" name="tel" id="tel" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Teacher</button>
    </form>
</div>
@endsection
