

<?php $__env->startSection('content'); ?>

<div class="main-content">
    <h1>Quản lí người dùng</h1>
    <div class="mb-3 text-start">
        <a style="text-decoration: none;" href="<?php echo e(route('users.UserAdminCreate')); ?>" class="btn-add">
            <i class="fas fa-plus-circle me-1"></i>Thêm người dùng
        </a>
    </div>


    <table>
        <thead>
            <tr>
                <th>Account Type</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Password</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->account_type); ?></td>
                <td><?php echo e($user->user_id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->address); ?></td>
                <td><?php echo e($user->phone); ?></td>
                <td><?php echo e($user->role); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td>
                    
                    <a href="<?php echo e(route('users.editUser', $user->id)); ?>"
                        style="background-color: #f8a5c2; color: black; padding: 6px 12px; border-radius: 8px; text-decoration: none; margin-right: 5px; transition: 0.3s;"
                        onmouseover="this.style.backgroundColor='#ffbcd9'"
                        onmouseout="this.style.backgroundColor='#f8a5c2'">
                        <i class="fas fa-edit"></i> Sửa
                    </a>

                    
                    <form action="<?php echo e(route('users.deleteUser', $user->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"
                            style="background-color: #d81b60; color: white; padding: 6px 12px; border-radius: 8px; border: none; transition: 0.3s;"
                            onmouseover="this.style.backgroundColor='#e91e63'"
                            onmouseout="this.style.backgroundColor='#d81b60'"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                            <i class="fas fa-trash-alt"></i> Xóa
                        </button>
                    </form>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <div class="mt-4">
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pjbe2new\srcDoAn\resources\views/crud_user/UserAdmin.blade.php ENDPATH**/ ?>