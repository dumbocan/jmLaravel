

<?php $__env->startSection('content'); ?>
<div>
    <a href="<?php echo e(Route('customers')); ?>">Clientes</a>
    <a href="<?php echo e(Route('projects')); ?>">Proyectos</a>
    <a href="<?php echo e(Route('materials')); ?>">Materiales</a>

</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\jmelectronautica\resources\views/main.blade.php ENDPATH**/ ?>