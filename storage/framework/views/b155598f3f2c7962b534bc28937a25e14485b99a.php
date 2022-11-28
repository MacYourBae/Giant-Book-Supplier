<div class="col">
    <div class="card h-100">
        <img src="<?php echo e(asset($book->image)); ?>" class="card-img-top" alt="<?php echo e($book->title . ' Image'); ?>">
        <div class="card-body h-100 d-flex flex-column">
            <h4 class="card-title"><?php echo e($book->title); ?></h4>
            <p class="card-text">
                <i>by: </i> 
                <?php echo e($book->author); ?>

            </p>
            <a href="<?php echo e(route('book.bookdetail', $book->id)); ?>" class="btn btn-primary mt-auto">Detail</a>
        </div>
    </div>
</div><?php /**PATH D:\Data Application\Laravel\EXAM\2440067093_UTS\resources\views/book/bookcontent.blade.php ENDPATH**/ ?>