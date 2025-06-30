@extends('master')
@section('main')
    <div class="side-app">
        <div class="card">
            <h1 class="details-header">Employee</h1>
            @if (session('success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="padding: 6px;color: white;border: 1px solid white;margin-bottom: 20px;border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="padding: 6px;color: white;border: 1px solid white;margin-bottom: 20px;border-radius: 5px;">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4 p-4" style="margin: 15px;">
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" required />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Password" required />
                    </div>

                    <div class="col-4 mt-4">
                        <label class="text-dark ">Role</label>
                        <select class="form-control" name="role_id" required>
                            <option>Select</option>
                            @foreach ($role as $r)
                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex p-2 col-12" style="justify-content: end;">
                    <button type="submit" class="submit-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
