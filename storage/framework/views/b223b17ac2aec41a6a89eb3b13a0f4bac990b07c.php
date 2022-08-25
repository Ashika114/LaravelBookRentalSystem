
<?php $__env->startSection('title','forgetPassword page'); ?>
<style>
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}    
</style>
<?php $__env->startSection('details'); ?>
<section class="vh-100" style="background-color:#fef8f5;">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        
        <img src="img/forgot_password.svg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="forget1" method="post">
        <?php echo csrf_field(); ?>
        <div class="alert alert-danger">
          <?php if($errors->any()): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($err); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
          <?php if(Session::has('success')): ?>
          <div class="alert alert-danger">
              <?php echo e(Session::get('success')); ?>

              <?php
                  Session::forget('success');
              ?>
          </div>
          <?php endif; ?>
            <h2 style="font-weight:bold; font-family:serif; margin-bottom:20px; text-align:center;">FORGET PASSWORD</h2>
          <!-- Email input -->
          <div class="form-outline mb-4">
           <input type="text" id="uname" name="txtusername" class="form-control  <?php $__errorArgs = ['txtusername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg" placeholder="Enter Username" />
            <label class="form-label" for="uname">Username</label>
          
          </div>

          <div class="form-outline mb-4">
           <input type="password" id="uname" name="txtpassword" class="form-control  <?php $__errorArgs = ['txtusername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg" placeholder="Enter Password" />
            <label class="form-label" for="uname">Password</label>
          
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="pwd" name="txtpassword1" class="form-control  <?php $__errorArgs = ['txtpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg" placeholder="Enter password" />
            <label class="form-label" for="pwd">Conform Password</label>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <center><button type="submit" class="btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#eb5d1e; border-radius: 12px; color:white;">SAVE</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Click here go to <a href="login"
                class="link-danger">Login</a></p></center>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/main\forgetpassword.blade.php ENDPATH**/ ?>