<?php if(session()->has('error')): ?>
  <div class="alert alert-danger alert-dismissible">
    <h4><i class="icon fa fa-ban"></i> Error</h4>
    <?php echo e(session()->get('error')); ?>

  </div>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
  <div class="alert alert-warning alert-dismissible">
    <h4><i class="icon fa fa-exclamation-circle"></i>Warning!</h4>
    <?php echo e(session()->get('warning')); ?>

  </div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success alert-dismissible">
    <h4><i class="icon fa fa-check"></i> Success</h4>
    <?php echo e(session()->get('success')); ?>

  </div>
<?php endif; ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\php-laravel\udemy-laravel-8-9\exe\example-app\resources\views/partials/alerts.blade.php ENDPATH**/ ?>