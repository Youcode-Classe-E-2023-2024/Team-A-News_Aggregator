<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal29e0933b3dc48d6704c78c78061f560d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29e0933b3dc48d6704c78c78061f560d = $attributes; } ?>
<?php $component = App\View\Components\Test::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('test'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Test::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29e0933b3dc48d6704c78c78061f560d)): ?>
<?php $attributes = $__attributesOriginal29e0933b3dc48d6704c78c78061f560d; ?>
<?php unset($__attributesOriginal29e0933b3dc48d6704c78c78061f560d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29e0933b3dc48d6704c78c78061f560d)): ?>
<?php $component = $__componentOriginal29e0933b3dc48d6704c78c78061f560d; ?>
<?php unset($__componentOriginal29e0933b3dc48d6704c78c78061f560d); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/pages/about.blade.php ENDPATH**/ ?>