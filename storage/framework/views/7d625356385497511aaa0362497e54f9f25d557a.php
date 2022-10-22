<?php $__env->startSection('page_title', ' - Add'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mt-5">Add</h1>

    <form method="post" action="<?php echo e(route('add.post')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description">
                <?php if($errors->has('description')): ?>
                    <small class="text-danger">
                        <?php echo e($errors->first('description')); ?>

                    </small>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/pages/add.blade.php ENDPATH**/ ?>