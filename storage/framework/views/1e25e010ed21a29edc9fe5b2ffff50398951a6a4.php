<?php $__env->startSection('page_title', ' - Profile'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mt-5">Profile</h1>

    <form method="post" action="<?php echo e(route('profile.post')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name') ?? auth()->user()->name); ?>">
                <?php if($errors->has('name')): ?>
                    <small class="text-danger">
                        <?php echo e($errors->first('name')); ?>

                    </small>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" disabled id="email" value="<?php echo e(auth()->user()->email); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <?php if($errors->has('password')): ?>
                    <small class="text-danger">
                        <?php echo e($errors->first('password')); ?>

                    </small>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/pages/profile.blade.php ENDPATH**/ ?>