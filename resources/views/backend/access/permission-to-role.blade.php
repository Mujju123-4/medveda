@extends('master')

@section('main')
    <div class="side-app">
        <div class="container mt-4">
            <h2>Assign Permissions to Role</h2>

            @if (session('success'))
                <div style="color: green;">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.role.permissions.assign') }}">
                @csrf

                {{-- Role Dropdown --}}
                <div class="mb-3">
                    <label for="role">Select Role</label>
                    <select name="role_id" id="role" required>
                        <option value="">-- Select Role --</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Permissions List --}}
                <div class="mb-3">
                    <label>Select Permissions</label><br>
                    @foreach ($permissions as $permission)
                        <label style="margin-right: 15px;">
                            <input type="checkbox" class="permission-checkbox" name="permissions[]"
                                value="{{ $permission->name }}">
                            {{ $permission->name }}
                        </label>
                    @endforeach
                </div>

                <button type="submit">Assign Permissions</button>
            </form>
        </div>
    </div>

    <script>
        $('#role').on('change', function() {
            var roleId = $(this).val();

            $('.permission-checkbox').prop('checked', false); // Uncheck all first

            if (roleId) {
                $.ajax({
                    url: 'role/' + roleId + '/permissions',
                    method: 'GET',
                    success: function(data) {
                        if (data.permissions) {
                            data.permissions.forEach(function(perm) {
                                $('input.permission-checkbox[value="' + perm + '"]').prop(
                                    'checked', true);
                            });
                        }
                    },
                    error: function() {
                        alert('Failed to fetch permissions');
                    }
                });
            }
        });
    </script>
@endsection
