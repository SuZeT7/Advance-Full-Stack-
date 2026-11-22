<nav class="navbar">
    <a href="{{ url('/') }}" class="brand">Mero Students</a>
    <div>
        <a href="{{ route('students.index') }}"
           class="{{ request()->routeIs('students.*') ? 'active' : '' }}">Students</a>
        <a href="{{ route('courses.index') }}"
           class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">Courses</a>
    </div>
</nav>