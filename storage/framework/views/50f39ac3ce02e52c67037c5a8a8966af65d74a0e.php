<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="col-8 offset-2">
        <div class="row">
            <div class="col-6">
                <img src="/storage/<?php echo e($post->image); ?>" class="w-100"/>
            </div>

            <div class="col-6">

                <div class="d-flex align-items-center">
                    <img src="<?php echo e($post->user->profile->profileImage()); ?>" width="40px" class="rounded-circle pr-3" />
                    <h4><?php echo e($post->user->username); ?></h4>
                </div>

                <hr />

                <div class="pt-2">
                    <h4><?php echo e($post->caption); ?></h4> 
                </div>

            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\instagram\resources\views/posts/show.blade.php ENDPATH**/ ?>