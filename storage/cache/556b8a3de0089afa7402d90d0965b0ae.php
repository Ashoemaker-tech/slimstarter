<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/htmx.org@1.9.4"
        integrity="sha384-zUfuhFKKZCbHTY6aRR46gxiqszMk5tcHjsVFxnUo8VMus4kHGVdIYVbOYYNlKmHV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Laraslim</title>
</head>

<body>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\slimstarter\resources\views/layouts/app.blade.php ENDPATH**/ ?>