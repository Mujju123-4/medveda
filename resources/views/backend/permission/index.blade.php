@extends('master')

@section('main')
    <div class="side-app">
        <div class="container mt-4">
            <h2>Manage Permissions</h2>

            {{-- Success Message --}}
            @if (session('success'))
                <div style="color: green; margin-bottom: 10px;">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Add Permission Form --}}
            <form action="{{ route('admin.permissions.store') }}" method="POST">
                @csrf
                <div>
                    <label>Permission Name</label><br>
                    <input type="text" name="name" required>
                    @error('name')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                    <button type="submit">Add Permission</button>
                </div>
            </form>

            {{-- Permission List --}}
            <h4 class="mt-4">All Permissions</h4>
            <table border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Guard</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                            <td>{{ $permission->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
