@extends('dashboard')

@section('content')
<div class="main-content">
    <h2>Chỉnh sửa người dùng</h2>

    <form action="{{ route('users.updateUser', $user->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Account Type</label>
            <input type="text" class="form-control" name="account_type"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('account_type', $user->account_type) }}" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">User ID</label>
            <input type="text" class="form-control" name="user_id"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('user_id', $user->user_id) }}" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Name</label>
            <input type="text" class="form-control" name="name"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Email</label>
            <input type="email" class="form-control" name="email"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Address</label>
            <input type="text" class="form-control" name="address"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('address', $user->address) }}">
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Phone</label>
            <input type="text" class="form-control" name="phone"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('phone', $user->phone) }}">
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Role</label>
            <input type="text" class="form-control" name="role"
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;"
                   value="{{ old('role', $user->role) }}">
        </div>

        <div class="form-group mb-4">
            <label style="color: #fce4ec;">Mật khẩu</label>
            <input type="password" class="form-control" name="password" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" required>
        </div>

        <button type="submit" class="btn" style="background-color: #f8a5c2; color: black;">Cập nhật</button>
    </form>
</div>
@endsection
