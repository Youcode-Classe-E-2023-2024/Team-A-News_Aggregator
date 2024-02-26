<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0ecde961eb608c762e8be422e147594a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ecde961eb608c762e8be422e147594a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sign_in','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sign_in'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ecde961eb608c762e8be422e147594a)): ?>
<?php $attributes = $__attributesOriginal0ecde961eb608c762e8be422e147594a; ?>
<?php unset($__attributesOriginal0ecde961eb608c762e8be422e147594a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ecde961eb608c762e8be422e147594a)): ?>
<?php $component = $__componentOriginal0ecde961eb608c762e8be422e147594a; ?>
<?php unset($__componentOriginal0ecde961eb608c762e8be422e147594a); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/pages/login.blade.php ENDPATH**/ ?>