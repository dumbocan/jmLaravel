<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\jmelectronautica\resources\views/layouts/login/login.blade.php ENDPATH**/ ?>