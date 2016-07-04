<!DOCTYPE html>
<html>
<head>
    <title>Profile Pic Generator</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/style.css')); ?>">
</head>
<body>
    <section id="header">
        <div class="container">
            <div class="logo">
                <h1>Profile Pic Generator</h1>
            </div>
        </div>
        <?php if(count($errors) > 0): ?>
            <?php foreach($errors->all() as $e): ?>
                <div class="errors">
                    <div class="container">
                        <h3><?php echo e($e); ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <section id="main-content">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('download_image'); ?>
    </section>
</body>
</html>