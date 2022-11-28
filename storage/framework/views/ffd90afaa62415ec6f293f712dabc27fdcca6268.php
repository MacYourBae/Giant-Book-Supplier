

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title' , 'home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="px-5 pb-3 d-flex flex-column gap-4">
        <div class="p-3 border rounded bg-light d-flex flex-column">
            <span>Address: <?php echo e($publisher->address); ?></span>
            <span>Phone: <?php echo e($publisher->phone); ?></span>
            <span>Email: <?php echo e($publisher->email); ?></span>
        </div>
        <div class="row row-cols-4">
            <?php $__currentLoopData = $publisher->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('book.bookcontent', ['book' => $bok], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data Application\Laravel\EXAM\2440067093_UTS\resources\views/publisher/publisherdetail.blade.php ENDPATH**/ ?>