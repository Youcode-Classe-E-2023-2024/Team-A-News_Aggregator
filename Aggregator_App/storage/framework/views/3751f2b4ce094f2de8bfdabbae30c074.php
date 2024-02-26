<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="text-gray-700 pt-9 sm:pt-10">
<header>
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<main id="content">
    <?php echo $__env->yieldContent('content'); ?>
</main>
<footer class="bg-black text-gray-400">
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
</body>
</html>
<?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/layouts/main.blade.php ENDPATH**/ ?>