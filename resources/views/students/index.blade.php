@extends('layouts.app')

@section('content')
    <h2>Students</h2>
    <a href="{{ route('students.create') }}">+ Add Student</a>

    <table border="1" cellpadding="6">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @forelse ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}">View</a>
                    <a href="{{ route('students.edit', $student) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this student?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No students yet.</td></tr>
        @endforelse
    </table>
@endsection