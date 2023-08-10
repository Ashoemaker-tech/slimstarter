
<?php $__env->startSection('content'); ?>
    <h1>Index page</h1>
    <pre><?php echo e($user->first_name); ?>  <?php echo e($user->email); ?></pre>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\slimstarter\resources\views/index.blade.php ENDPATH**/ ?>