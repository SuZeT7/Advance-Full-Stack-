@extends('layouts.app')

@section('content')
    <h2>{{ $course->name }}</h2>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
    <p><strong>Fee:</strong> {{ $course->fee }}</p>
    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
    <p><strong>Active:</strong> {{ $course->is_active ? 'Yes' : 'No' }}</p>
    <p><strong>Created:</strong> {{ $course->created_at }}</p>
    <p><strong>Updated:</strong> {{ $course->updated_at }}</p>

    <a href="{{ route('courses.edit', $course) }}">Edit</a>
    <a href="{{ route('courses.index') }}">Back</a>
@endsection