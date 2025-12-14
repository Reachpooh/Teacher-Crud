@extends('layout')

@section('content')
<div class="header">
    <h1>Teachers</h1>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add Teacher</a>
</div>

<div class="card">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>TID</th>
                    <th>Full Name</th>
                    <th>Telephone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->tid }}</td>
                    <td>{{ $teacher->full_name }}</td>
                    <td>{{ $teacher->tel }}</td>
                    <td class="actions">
                        <a href="{{ route('teachers.show', $teacher->tid) }}" class="btn btn-secondary">View</a>
                        <a href="{{ route('teachers.edit', $teacher->tid) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('teachers.destroy', $teacher->tid) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="empty-state">No teachers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
