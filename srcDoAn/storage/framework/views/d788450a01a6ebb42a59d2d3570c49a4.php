<form action="<?php echo e($route); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if($method === 'PUT'): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <div class="form-group">
        <label>Account Type</label>
        <input type="text" name="account_type" value="<?php echo e(old('account_type', $user->account_type ?? '')); ?>" required>
    </div>

    <div class="form-group">
        <label>User ID</label>
        <input type="text" name="user_id" value="<?php echo e(old('user_id', $user->user_id ?? '')); ?>" required>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo e(old('name', $user->name ?? '')); ?>" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo e(old('email', $user->email ?? '')); ?>" required>
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo e(old('address', $user->address ?? '')); ?>">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo e(old('phone', $user->phone ?? '')); ?>">
    </div>

    <div class="form-group">
        <label>Role</label>
        <input type="text" name="role" value="<?php echo e(old('role', $user->role ?? '')); ?>">
    </div>

    <button type="submit" class="btn-add">Lưu</button>
</form>
<?php /**PATH D:\pjbe2new\srcDoAn\resources\views/crud_user/form.blade.php ENDPATH**/ ?>