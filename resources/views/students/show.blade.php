@extends('layouts.app')

@section('content')
    <h2>{{ $student->name }}</h2>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
    <p><strong>Created:</strong> {{ $student->created_at }}</p>
    <p><strong>Updated:</strong> {{ $student->updated_at }}</p>

    <a href="{{ route('students.edit', $student) }}">Edit</a>
    <a href="{{ route('students.index') }}">Back</a>
@endsection