<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students and their courses</title>
</head>
<body>
    <nav>
        <a href="{{ route('students.index') }}">Students</a> |
        <a href="{{ route('courses.index') }}">Courses</a>
    </nav>
    <hr>

    @if (session('success'))
        <p><strong>{{ session('success') }}</strong></p>
    @endif

    @yield('content')
</body>
</html>