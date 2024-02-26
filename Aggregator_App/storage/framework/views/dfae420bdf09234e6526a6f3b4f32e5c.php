

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalebe431a2b17c8bbce38f368c9fbf2e1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalebe431a2b17c8bbce38f368c9fbf2e1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sign_up','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sign_up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalebe431a2b17c8bbce38f368c9fbf2e1e)): ?>
<?php $attributes = $__attributesOriginalebe431a2b17c8bbce38f368c9fbf2e1e; ?>
<?php unset($__attributesOriginalebe431a2b17c8bbce38f368c9fbf2e1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalebe431a2b17c8bbce38f368c9fbf2e1e)): ?>
<?php $component = $__componentOriginalebe431a2b17c8bbce38f368c9fbf2e1e; ?>
<?php unset($__componentOriginalebe431a2b17c8bbce38f368c9fbf2e1e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/pages/register.blade.php ENDPATH**/ ?>