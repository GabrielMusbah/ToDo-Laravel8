<?php $__env->startSection('page_title', ' - Home'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="mt-5 d-flex justify-content-between align-items-center">
        To Do
        <a href="<?php echo e(route('add')); ?>" class="btn btn-primary">Add</a>
    </h1>

    <ul class="list-group">

        <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($item->description); ?>

                <div>
                    <a href="<?php echo e(route('remove', $item->id)); ?>" class="badge badge-danger">Remove</a>
                </div>
            </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/pages/home.blade.php ENDPATH**/ ?>