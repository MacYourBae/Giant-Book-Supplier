

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title' , 'home'); ?>

<?php $__env->startSection('content'); ?>

<main class="p-3">

    <div class="">
        <ul class="navbar-nav flex-row justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link toggle-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="dropdown-item"
                                href="<?php echo e(route('category.detail', $c->id)); ?>"><?php echo e($category->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('publisher.publisher')); ?>">Publisher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('contact.contact')); ?>">Contact</a>
            </li>
        </ul>
    </div>

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data Application\Laravel\EXAM\2440067093_UTS\resources\views/home.blade.php ENDPATH**/ ?>