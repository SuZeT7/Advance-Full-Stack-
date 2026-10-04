@extends('layouts.app')

@section('content')
    <h2>Courses</h2>
    <a href="{{ route('courses.create') }}">+ Add Course</a>

    <table border="1" cellpadding="6">
        <tr>
            <th>Name</th>
            <th>Duration (weeks)</th>
            <th>Fee</th>
            <th>Difficulty</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
        @forelse ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->duration }}</td>
                <td>{{ $course->fee }}</td>
                <td>{{ $course->difficulty }}</td>
                <td>{{ $course->is_active ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('courses.show', $course) }}">View</a>
                    <a href="{{ route('courses.edit', $course) }}">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this course?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">No courses yet.</td></tr>
        @endforelse
    </table>
@endsection