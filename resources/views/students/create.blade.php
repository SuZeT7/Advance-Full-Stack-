@extends('layouts.app')

@section('content')
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @include('students._form')
    </form>
@endsection