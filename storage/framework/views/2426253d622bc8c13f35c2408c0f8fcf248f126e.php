<?php $__env->startSection('content'); ?>
<div class="oculto-impresion">
    <a href="<?php echo e(Route('addCliente')); ?>"> Insertar cliente</a>

    <a href="<?php echo e(Route('projects')); ?>">Proyectos</a>
    <a href="<?php echo e(Route('materials')); ?>">Gestion de materiales</a>

</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\jmelectronautica\resources\views/layouts/main/main.blade.php ENDPATH**/ ?>