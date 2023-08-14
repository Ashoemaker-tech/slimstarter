

<?php $__env->startSection('content'); ?>
    <div class="shadow rounded-lg border-2 w-1/2 p-4 mt-10 mx-auto space-y-6 text-center">
        <h1 class="text-6xl text-gray-900 font-semibold">Your Account</h1>
        <h2 class="text-2xl">Welcome <?php echo e($user->username); ?></h2>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\slimstarter\resources\views/auth/index.blade.php ENDPATH**/ ?>