@extends('layouts.app')

@section('content')
    <h2>Add Course</h2>
    <form action="{{ route('courses.store') }}" method="POST">
        @include('courses._form')
    </form>
@endsection