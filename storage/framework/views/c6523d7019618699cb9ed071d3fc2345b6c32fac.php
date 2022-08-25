
<?php $__env->startSection('title','Author Form'); ?>
<style>
  label {
    font-size:20px;
    font-weight:bold;
  }
 .row{
    margin-top: 20px;
  }
</style>
<?php $__env->startSection('details'); ?>
<section class="vh-200">
<form action="\authorupdate" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">AUTHOR DETAILS</h3>
            <input type="hidden" value="<?php echo e($author['authorid']); ?>" name="txtauthorid" />
            <div class="row" id="row">
              <div class="col-4">
                 <label for="aname">Author Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtauthorname" id="aname"  value="<?php echo e($author['authorname']); ?>" placeholder="Enter AuthorName">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="acno">Contact Number</label>
              </div>
              <div class="col">
                <input type="text" class="form-control"  value="<?php echo e($author['contactno']); ?>" name="txtcno" id="acno" placeholder="Enter ContactNumber">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aemail">Email Address</label>
              </div>
              <div class="col">
                <input type="email" class="form-control" name="txtemail"  value="<?php echo e($author['emailid']); ?>" id="aemail" placeholder="Enter EmailAddress">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="img">Image</label>
              </div>
              <div class="col">
                <input type="file" class="form-control" name="fupimage" value="<?php echo e($author['image']); ?>" id="img">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-6">
                <button class="btn btn-success btn-lg btn-block" type="submit">SAVE</button>
              </div>
              <div class="col">
                <button class="btn btn-success btn-lg btn-block" type="submit">CANCEL</button>
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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\author\authorupdate.blade.php ENDPATH**/ ?>