<?php $__env->startSection('page_title', ' - Login'); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-signin" method="post" action="<?php echo e(route('login.post')); ?>">
        <?php echo csrf_field(); ?>
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus value="<?php echo e(old('email')); ?>">
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
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember_me"> Remember me
            </label>
        </div>
        <a href="<?php echo e(route('register')); ?>">Register</a>
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/pages/login.blade.php ENDPATH**/ ?>