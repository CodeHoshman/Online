
<?php $__env->startSection('content'); ?>
<div class="row bg-white p-2 " style="border-radius: 10px">
    <div class="col-lg-6 col-sm">
    <table class="table">
        <h3>Cart</h3>
        <tbody>
          <tr>
          <td  scope="row"><img src="assets/upload/Grey Super Skinny.JPG"  width="50"alt=""></td>
            <td>Grey Super Skinny</td>
            <td>XL , X</td>
            <td>100 IQD</td>
            <td><a href="" class="text-danger">Delete</a></td>
          </tr>
          <tr>
            <td  scope="row"><img src="assets/upload/Navy Shorts.jpeg"  width="50"alt=""></td>
            <td>Navy Shorts</td>
            <td>XS , X , 2XL</td>
            <td>250 IQD</td>
            <td><a href="" class="text-danger">Delete</a></td>
          </tr>
          <tr>
            <td  scope="row"><img src="assets/upload/blue shirt.JPEG"  width="50"alt=""></td>
            <td>blue shirt</td>
            <td>XL , M</td>
            <td>150 IQD</td>
            <td><a href="" class="text-danger">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-lg-6 mt-3 bg-lighter p-2 table-borderless" style="border-radius:10px">
        <h3>Total Orders</h3>
        <div class="col">
        <table class="table">
            <thead>
            <tbody>
              <tr>
                <td>2 Items</td>
                <td>200 IQD</td>
              </tr>
              <tr>
                <td>Delivery Fee </td>
                <td>20 IQD</td>
              </tr>
              <tr>
                <td>Total cast</td>
                <td>400 IQD</td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-dark w-100 radius-20 border-0 mt-2">Proccess TO CheckOut</button>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\resources\views//card.blade.php ENDPATH**/ ?>