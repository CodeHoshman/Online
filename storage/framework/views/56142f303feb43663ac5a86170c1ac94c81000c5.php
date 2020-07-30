
<?php $__env->startSection('content'); ?>
<div class="row  justify-content-center text-center m-3">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card m-2 p-2 radius-20" style="width: 18rem;">
        <img src="assets/upload/<?php echo e($product->image); ?>" class="card-img-top w-50 m-auto img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($product->title); ?></h5>
            <h5 class="card-title"><?php echo e($product->price); ?></h5>

            <a href="shopper/<?php echo e($product->userid); ?>/<?php echo e($product->id); ?>"
                class="btn bg-gradient-info  border-0 text-white">View More</a>
            <a href="delete/<?php echo e($product->id); ?>"><img src="assets/img/delete.svg" width="26" style="position: absolute;right:0px;margin:10px;top:0px" alt=""></a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\resources\views//home.blade.php ENDPATH**/ ?>