<form method="POST" action="{{ route('admin.access.assign') }}">
    @csrf
    <select name="admin_id">
        @foreach ($admins as $admin)
            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
        @endforeach
    </select>

    <select name="roles[]" multiple>
        @foreach ($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
        @endforeach
    </select>

    <button type="submit">Assign Roles</button>
</form>
