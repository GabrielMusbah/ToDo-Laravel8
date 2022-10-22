<?php $__env->startSection('page_title', ' - Register'); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-signin" method="post" action="<?php echo e(route('register.post')); ?>">
        <?php echo csrf_field(); ?>
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="name" class="sr-only">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus value="<?php echo e(old('name')); ?>">

        <?php if($errors->has('name')): ?>
            <small class="text-danger">
                <?php echo e($errors->first('name')); ?>

            </small>
        <?php endif; ?>

        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required value="<?php echo e(old('email')); ?>">

        <?php if($errors->has('email')): ?>
            <small class="text-danger">
                <?php echo e($errors->first('email')); ?>

            </small>
        <?php endif; ?>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

        <?php if($errors->has('password')): ?>
            <small class="text-danger">
                <?php echo e($errors->first('password')); ?>

            </small>
        <?php endif; ?>

        <label for="password_confirmation" class="sr-only">Password Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/pages/register.blade.php ENDPATH**/ ?>