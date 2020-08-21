<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        
        <div class="col-3">
            <img class="p-5 rounded-circle" src="https://instagram.fhyd10-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fhyd10-1.fna.fbcdn.net&_nc_ohc=Ze0kzpbAfiEAX_-RJ_y&oh=7efc5638abd416084ad7692d445ee4a1&oe=5F5A94E7" />
        </div>

        <div class="col-9 p-5">
            <div class="d-flex justify-content-between">
                <strong><?php echo e($user->username); ?></strong>
                <a href="/p/create">Create</a>
            </div>

            <div class="d-flex pt-3">
                <div class="pr-4"><strong><?php echo e($user->posts->count()); ?> Posts</strong></div>
                <div class="pr-4"><strong>53.7k followers</strong></div>
                <div class="pr-4"><strong>276 following</strong></div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\instagram\resources\views/posts/post.blade.php ENDPATH**/ ?>