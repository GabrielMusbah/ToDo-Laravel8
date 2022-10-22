<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo <?php echo $__env->yieldContent('page_title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
</head>
<body>
    <?php if(auth()->guard()->check()): ?>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <main role="main" class="container">
        <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>