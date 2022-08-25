
<?php $__env->startSection('title','email'); ?>
<style>
  label {
    font-size:20px;
    font-weight:bold;
    
  }
  #row{
    margin-top: 20px;
    text-align: left;
  }
  .form-control:valid {
  background-color:#F5F5F5;
  }
  
</style>
<?php $__env->startSection('header','COMMUNICATION THROUGH EMAIL'); ?>
<?php $__env->startSection('details'); ?>
<form action="ownercomm" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <?php if(Session::has('success')): ?>
          <div class="alert alert-success">
              <?php echo e(Session::get('success')); ?>

              <?php
                  Session::forget('success');
              ?>
          </div>
          <?php endif; ?>

          <h3 class="mb-4">Mail to Reader</h3>

            <div class="row" id="row">
                <div class="col-4">
                    <label for="aname">Select Reader</label>
                </div>
                <div class="col">
                <select  id="country-dropdown" name="txtowner" class="form-control">
                                <?php $__currentLoopData = $reader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($data->emailid); ?>">
                                    <?php echo e($data->emailid); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                </div>

                <div class="row" id="row">
                <div class="col-4">
                    <label for="aemail">Message</label>
                </div>
                <div class="col">
                <textarea class="form-control" name="txtmessage" rows="6" required></textarea>
                </div>
            </div>

        

            <div class="row" id="row">
              <div class="col-9">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('owner/ownerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/owner\owneremail.blade.php ENDPATH**/ ?>