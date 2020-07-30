
<?php $__env->startSection('content'); ?>
<div class="container blur p-3 radius-20 ">
    <h4 class="text-white">Contact Us</h4>
    <div class="row">
        <div class="col-lg-6 col-sm contact-img">
            <img src="/assets/img/contact1.JPG"  class="img-fluid" alt="">
        </div>
    <div class="col-lg-6 col-sm mt-3">
        <form action="/contact" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="title" placeholder="title report" class="form-control form-control-lg radius-20 border-0">
            <textarea name="desc" id="" class="form-control mt-2 form-control-lg radius-20 border-0" cols="30" placeholder="Description" rows="10"></textarea>
            <button class="btn btn-white w-100 radius-20 mt-3 ">Send</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\resources\views//contact.blade.php ENDPATH**/ ?>