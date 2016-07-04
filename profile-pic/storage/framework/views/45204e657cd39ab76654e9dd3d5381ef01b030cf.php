<?php $__env->startSection('download_image'); ?>
    <div class="container">
        <img src="<?php echo e(url('uploads/images/'.$file_id)); ?>">
    </div>
    <div class="download">
    <a href="<?php echo e(url('uploads/images/'.$file_id)); ?>">Download Image</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>