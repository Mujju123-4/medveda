@extends('master')
@section('main')
    <div class="side-app">
        <h3>Roles</h3>
        <form method="POST" action="{{ route('admin.roles.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Role name">
            <button type="submit">Add Role</button>
        </form>

        <ul>
            @foreach ($roles as $role)
                <li>{{ $role->name }}</li>
            @endforeach
        </ul>

    </div>
@endsection
