<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Crud Perangkat Lunak Telekomunikasi'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <h1 class="text-center mt-3">Mahasiswa Teknik Elektro</h1>

    <div class="mt-3 container">
        <?php echo $__env->yieldContent('konten'); ?>
    </div>

    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\Crud_syams2\resources\views/layout.blade.php ENDPATH**/ ?>