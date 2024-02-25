<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal73e10f4a4343ab718d7b36a25b48d8c7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73e10f4a4343ab718d7b36a25b48d8c7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.favorite','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('favorite'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73e10f4a4343ab718d7b36a25b48d8c7)): ?>
<?php $attributes = $__attributesOriginal73e10f4a4343ab718d7b36a25b48d8c7; ?>
<?php unset($__attributesOriginal73e10f4a4343ab718d7b36a25b48d8c7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73e10f4a4343ab718d7b36a25b48d8c7)): ?>
<?php $component = $__componentOriginal73e10f4a4343ab718d7b36a25b48d8c7; ?>
<?php unset($__componentOriginal73e10f4a4343ab718d7b36a25b48d8c7); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/favorite.blade.php ENDPATH**/ ?>