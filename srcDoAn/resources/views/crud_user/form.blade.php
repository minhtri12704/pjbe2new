<form action="{{ $route }}" method="POST">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif

    <div class="form-group">
        <label>Account Type</label>
        <input type="text" name="account_type" value="{{ old('account_type', $user->account_type ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>User ID</label>
        <input type="text" name="user_id" value="{{ old('user_id', $user->user_id ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{ old('address', $user->address ?? '') }}">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $user->phone ?? '') }}">
    </div>

    <div class="form-group">
        <label>Role</label>
        <input type="text" name="role" value="{{ old('role', $user->role ?? '') }}">
    </div>

    <button type="submit" class="btn-add">Lưu</button>
</form>
