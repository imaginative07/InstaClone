<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        
        <div class="col-3">
            <img class="p-5 w-100 rounded-circle" src="<?php echo e($user->profile->profileImage()); ?>" />
        </div>

        <div class="col-9 p-5">
            <div class="d-flex align-items-center pb-3">
                <strong><?php echo e($user->username); ?></strong> 
                <follow-button user_id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"></follow-button>
            </div>

            <a href="/p/create">Create</a> | 
            <a href="/profile/<?php echo e($user->id); ?>/edit">Edit</a>

            <div class="d-flex pt-3">
                <div class="pr-4"><strong><?php echo e($postsCount); ?> Posts</strong></div>
                <div class="pr-4"><strong><?php echo e($followersCount); ?> followers</strong></div>
                <div class="pr-4"><strong><?php echo e($followingCount); ?> following</strong></div>
            </div>

            <div class="pt-4">
                <strong><?php echo e($user->profile->title); ?></strong>
                <p><?php echo e($user->profile->description); ?></p>
                <a href="#"><?php echo e($user->profile->url ?? "freecodecamp.org"); ?></a>
            </div>

            

        </div>
    </div>

    <div class="row">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 pb-5">
                <a href="/p/<?php echo e($post->id); ?>">
                    <img class="w-100" src="/storage/<?php echo e($post->image); ?>" />
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\instagram\resources\views/profiles/index.blade.php ENDPATH**/ ?>