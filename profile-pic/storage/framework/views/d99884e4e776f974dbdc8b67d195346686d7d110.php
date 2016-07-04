<?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="default-img">
                        <img src="<?php echo e(url('images/default.jpg')); ?>">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form">
                        <form action="/" method="POST" enctype="multipart/form-data">
                            <input type="file" name="image">
                            <input type="submit" name="submit" value="Upload">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>

                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>