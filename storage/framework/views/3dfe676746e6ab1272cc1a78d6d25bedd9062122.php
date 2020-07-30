
<?php $__env->startSection('content'); ?>
<div class="row  justify-content-center text-center m-3">
    <?php $__currentLoopData = $shoppers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoppers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card m-2 p-2 radius-20" style="width: 18rem;">
    <img src="assets/shopper/men.JPG" class="card-img-top w-100 radius-20 m-auto img-fluid" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php echo e($shoppers->name); ?></h5>
    <h5 class="card-title"><?php echo e($shoppers->email); ?></h5>
    <a href="/shopper/<?php echo e($shoppers->id); ?>" class="btn bg-gradient-info w-100 border-0 text-white">SEE Profile</a>

    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\resources\views//shopper/shopper.blade.php ENDPATH**/ ?>