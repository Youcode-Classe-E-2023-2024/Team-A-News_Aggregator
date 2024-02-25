<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal9f47aa6ba07deb8d0412a65eb4ba1168 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f47aa6ba07deb8d0412a65eb4ba1168 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.intrest_pop_up','data' => ['categories' => $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('intrest_pop_up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f47aa6ba07deb8d0412a65eb4ba1168)): ?>
<?php $attributes = $__attributesOriginal9f47aa6ba07deb8d0412a65eb4ba1168; ?>
<?php unset($__attributesOriginal9f47aa6ba07deb8d0412a65eb4ba1168); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f47aa6ba07deb8d0412a65eb4ba1168)): ?>
<?php $component = $__componentOriginal9f47aa6ba07deb8d0412a65eb4ba1168; ?>
<?php unset($__componentOriginal9f47aa6ba07deb8d0412a65eb4ba1168); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/x.blade.php ENDPATH**/ ?>