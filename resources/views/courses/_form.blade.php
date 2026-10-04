@csrf

<p>
    <label>Name</label><br>
    <input type="text" name="name" value="{{ old('name', $course->name ?? '') }}">
    @error('name') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Description</label><br>
    <textarea name="description" rows="4" cols="40">{{ old('description', $course->description ?? '') }}</textarea>
    @error('description') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Duration (weeks)</label><br>
    <input type="number" name="duration" min="1" value="{{ old('duration', $course->duration ?? '') }}">
    @error('duration') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Fee</label><br>
    <input type="number" name="fee" step="0.01" min="0" value="{{ old('fee', $course->fee ?? '') }}">
    @error('fee') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>Difficulty</label><br>
    <select name="difficulty">
        @foreach (['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}" {{ old('difficulty', $course->difficulty ?? '') === $level ? 'selected' : '' }}>
                {{ $level }}
            </option>
        @endforeach
    </select>
    @error('difficulty') <br><small>{{ $message }}</small> @enderror
</p>

<p>
    <label>
        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $course->is_active ?? true) ? 'checked' : '' }}>
        Active
    </label>
</p>

<button type="submit">Save</button>
<a href="{{ route('courses.index') }}">Cancel</a>