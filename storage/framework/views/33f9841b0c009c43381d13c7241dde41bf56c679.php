
<?php $__env->startSection('title','Author Form'); ?>
<style>
  label {
    font-size:20px;
    font-weight:bold;
  }
  #row{
    margin-top: 20px;
  }
</style>
<?php $__env->startSection('details'); ?>
<section class="vh-200" style="background-color: #fee8d6">
<form method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">AUTHOR DETAILS</h3>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aname">Author Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtauthorname" id="aname" placeholder="Enter AuthorName">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="acno">Contact Number</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtcno" id="acno" placeholder="Enter ContactNumber">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aemail">Email Address</label>
              </div>
              <div class="col">
                <input type="email" class="form-control" name="txtemail" id="aemail" placeholder="Enter EmailAddress">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="img">Image</label>
              </div>
              <div class="col">
                <input type="file" class="form-control" name="fupimage" id="img">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-6">
              <a href="<?php echo e(url('/authorinsert')); ?>">
                <button class="btn btn-success btn-lg btn-block" type="submit">SAVE</button>
              </a>
              </div>
              <div class="col">              
              <a href="<?php echo e(url('/showa')); ?>">
                <button class="btn btn-success btn-lg btn-block" type="submit">CANCEL</button>
              </a>
              </div>
            </div>
            
          

          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\authorform.blade.php ENDPATH**/ ?>