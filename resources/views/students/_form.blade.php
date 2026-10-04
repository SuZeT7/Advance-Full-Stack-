@csrf

<p>
    <label>Name</label><br>
    <input type="text" name="name" value="{{ old('name', $student->name ?? '') }}">
    @error('name') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email', $student->email ?? '') }}">
    @error('email') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Phone</label><br>
    <input type="text" name="phone" value="{{ old('phone', $student->phone ?? '') }}">
    @error('phone') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Address</label><br>
    <input type="text" name="address" value="{{ old('address', $student->address ?? '') }}">
    @error('address') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Date of Birth</label><br>
    <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth ?? '') }}">
    @error('date_of_birth') <br><small>{{ $message }}</small> @enderror
</p>

<button type="submit">Save</button>
<a href="{{ route('students.index') }}">Cancel</a>