<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        
        <div class="col-3">
            <img class="p-5 rounded-circle" src="https://instagram.fhyd10-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fhyd10-1.fna.fbcdn.net&_nc_ohc=Ze0kzpbAfiEAX_-RJ_y&oh=7efc5638abd416084ad7692d445ee4a1&oe=5F5A94E7" />
        </div>

        <div class="col-9 p-5">
            <div><strong><?php echo e($user->username); ?></strong></div>

            <div class="d-flex">
                <div class="pr-4"><strong>314 posts</strong></div>
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
        <div class="col-4"><img class="w-100" src="https://instagram.fhyd10-1.fna.fbcdn.net/v/t51.2885-15/e35/c3.0.744.744a/s480x480/117185734_730508550844355_4827964239716308767_n.jpg?_nc_ht=instagram.fhyd10-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=1Tt3EsxmUZwAX86OyXr&oh=1f996b634383f1732f3296c8effac24f&oe=5F5990A5" /></div>
        <div class="col-4"><img class="w-100" src="https://instagram.fhyd10-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.117.937.937a/s480x480/116792589_940704333073490_3603561987847571728_n.jpg?_nc_ht=instagram.fhyd10-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=ufQLCjVyOuoAX8vb4bU&oh=8525167c1e5693684486b87fbc26cf9f&oe=5F5ABA4B" /></div>
        <div class="col-4"><img class="w-100" src="https://instagram.fhyd10-1.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.746.746a/s480x480/116046434_2514443215325780_2721033236601132108_n.jpg?_nc_ht=instagram.fhyd10-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=0HZcHh3lLtMAX-8FZPp&oh=cad8853d8c11743f47d06e195b35f44a&oe=5F59A459" /></div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\instagram\resources\views/home.blade.php ENDPATH**/ ?>