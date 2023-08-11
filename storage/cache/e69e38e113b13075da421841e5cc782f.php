
<?php $__env->startSection('content'); ?>
    <h1>Hello from blade</h1>
    <h2>Hello <?php echo e($name); ?></h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\slimstarter\resources\views/index.blade.php ENDPATH**/ ?>