
<?php $__env->startSection('title','Publication Form'); ?>
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
<section class="vh-200">
<form action="pubinsert" method="post">
<?php echo csrf_field(); ?>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">PUBLICATION DETAILS</h3>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pname">Publication Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="pname" name="txtpubname" placeholder="Enter PublicationName">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pcno">Contact Number</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="pcno" name="txtcno" placeholder="Enter ContactNumber">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pemail">Email Address</label>
              </div>
              <div class="col">
                <input type="email" class="form-control" id="pemail" name="txtemail" placeholder="Enter EmailAddress">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-9">
                <button class="btn btn-success btn-lg btn-block" type="submit">SAVE</button>
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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\publication\publicationform.blade.php ENDPATH**/ ?>