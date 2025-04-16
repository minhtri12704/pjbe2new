

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <h2>Thêm người dùng mới</h2>

    <form action="<?php echo e(route('users.store')); ?>" method="POST" class="mt-4">
        <?php echo csrf_field(); ?>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Account Type</label>
            <input type="text" class="form-control" name="account_type" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('account_type')); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">User ID</label>
            <input type="text" class="form-control" name="user_id" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('user_id')); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Name</label>
            <input type="text" class="form-control" name="name" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('name')); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Email</label>
            <input type="email" class="form-control" name="email" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('email')); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Address</label>
            <input type="text" class="form-control" name="address" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('address')); ?>">
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Phone</label>
            <input type="text" class="form-control" name="phone" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('phone')); ?>">
        </div>

        <div class="form-group mb-3">
            <label style="color: #fce4ec;">Role</label>
            <input type="text" class="form-control" name="role" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" 
                   value="<?php echo e(old('role')); ?>">
        </div>

        <div class="form-group mb-4">
            <label style="color: #fce4ec;">Mật khẩu</label>
            <input type="password" class="form-control" name="password" 
                   style="background-color: #1e1e1e; border: 1px solid #f8a5c2; color: #fce4ec;" required>
        </div>

        <button type="submit" class="btn" style="background-color: #f8a5c2; color: black;">Lưu</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pjbe2new\srcDoAn\resources\views/crud_user/UserAdminCreate.blade.php ENDPATH**/ ?>