

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title' , 'home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row px-5">
        <div class="col-lg-2" style="width: 20rem;">
            <img src="<?php echo e(asset($book->image)); ?>" class="img-thumbnail" alt="<?php echo e($book->title . ' Image'); ?>" />
        </div>
        <div class="col">
            <h4><?php echo e($book->title); ?></h4>
            <p>
                <span class="text-secondary">Author: </span> <?php echo e($book->author); ?>

            </p>
            <p>
                <span class="text-secondary">Publisher: </span> <?php echo e($book->publisher->name); ?>

            </p>
            <p>
                <span class="text-secondary">Year: </span> <?php echo e($book->year); ?>

            </p>
            <p class="m-0">
                <span class="text-secondary">Synopsis: </span>
            </p>
            <p class="text-justify">
                <?php echo e($book->synopsis); ?>

            </p>
            <div class="d-flex align-items-center">
                <span class="text-secondary">Category: </span>
                <div class="d-flex">
                    <?php $__currentLoopData = $book->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('category.category', $category->id)); ?>"
                            class="mx-3 px-3 py-1 btn btn-outline-dark"><?php echo e($category->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data Application\Laravel\EXAM\2440067093_UTS\resources\views/book/bookdetail.blade.php ENDPATH**/ ?>