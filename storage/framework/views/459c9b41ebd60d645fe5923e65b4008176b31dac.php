<?php $__env->startSection('content'); ?>

<div class="row justify-content-center text-center" style="margin-top: 10px">
    
    <div class="card m-2 p-3 radius-20" style="width: 18rem;">
        <img src="/assets/img/sale.svg" class="card-img-top w-50 m-auto" alt="...">
        <div class="card-body">
            <h5 class="card-title text-danger">Login / Register</h5>
            <a href="#" class="btn bg-gradient-danger w-100 border-0 text-white">Add Products</a>
        </div>
    </div>
    
    <div class="card m-2 p-3 radius-20" style="width: 18rem;">
        <img src="/assets/img/product.svg" class="card-img-top w-50 m-auto" alt="...">
        <div class="card-body">
            <h5 class="card-title text-success">PRODUCTS</h5>
            <h5 class="card-title text-success"><?php echo e(session("success_order")); ?></h5>
            <h5 class="card-title text-danger"><?php echo e(session("fail_order")); ?></h5>
            <a href="/shopping" class="btn bg-gradient-success w-100 border-0 text-white">VIEW PRODUCTS</a>
        </div>
    </div>
    
    <div class="card m-2 p-3 radius-20" style="width: 18rem;">
        <img src="/assets/img/shopper.svg" class="card-img-top w-50 m-auto" alt="...">
        <div class="card-body">
            <h5 class="card-title text-primary">SHOPPER</h5>
            <a href="/shopper" class="btn bg-gradient-primary w-100 border-0 text-white">VIEW SHOPPER</a>
        </div>
    </div>
    
    <div class="card m-2 p-3 radius-20" style="width: 18rem;">
        <img src="/assets/img/contact.svg" class="card-img-top w-50 m-auto" alt="...">
        <div class="card-body">
            <h5 class="card-title text-primary">Contact</h5>
            <h5 class="card-title text-success"><?php echo e(session("success")); ?></h5>
            <h5 class="card-title text-danger"><?php echo e(session("fail")); ?></h5>
            <a href="/contact" class="btn bg-gradient-pink w-100 border-0 text-white">Contact Us</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\resources\views/welcome.blade.php ENDPATH**/ ?>