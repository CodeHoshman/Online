

<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluid bg-white p-3  " style="border-radius: 10px">
    <div class="container text-center">
        <img src="/assets/upload/<?php echo e($product->image); ?>" class="card-img-top w-25 m-auto img-fluid shadow" alt="...">
        <p class="mt-5">Product Code:<?php echo e($product->id); ?></p>
        <p>Product Price :<?php echo e($product->price); ?></p>
        <p class="bg-gradient-lighter p-3">
            <b>Product Details</b>
            <br>
            <?php echo e($product->details); ?><br>
            <form action="/order" method="POST">
                <?php echo csrf_field(); ?>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $product->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <div class="form-group form-check m-2 p-3 ">
                        <input type="checkbox" class="form-check-input" name="sizes[]" value="<?php echo e($size); ?>"
                            id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"><?php echo e($size); ?></label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" value="<?php echo e($product->id); ?>" name="post_id">
            </div>
        </p>
        <button class="btn bg-gradient-success w-100 border-0 text-white" href="#" role="button">Add To card</button>
    </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\resources\views//shopper/details.blade.php ENDPATH**/ ?>