
<?php $__env->startSection('title','SignUp Page'); ?>
<?php $__env->startSection('details'); ?>
<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
</style>

<section class="vh-500" style="background-color:#fef8f5;">
  <div class="container py-0 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-6 col-xl-5">
        <br><br><br><br><br><br>
        <img src="img/undraw_sign_in_re_o58h.svg"
          class="img-fluid" alt="reg image">
      </div>
      <div class="col-md-7 col-lg-6 col-xl-6 offset-xl-1">
     <center> <h2 class="fw-bold" style="margin-bottom:20px;">Sign up now</h2></center>
      <form action="insert" method="post">
      <?php echo csrf_field(); ?>
          <?php if($errors->any()): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($err); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          <!-- Username input -->
          <div class="form-outline mb-4">
            <input type="text" id="username" name="txtusername" placeholder="Enter username" class="form-control  <?php $__errorArgs = ['txtusername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg"  />
            <label class="form-label" for="username">Username</label>
            <?php $__errorArgs = ['txtusername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger">
                  <?php echo e($message); ?>

              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="txtpassword" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger">
                  <?php echo e($message); ?>

              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-outline mb-4">
           <select class="form-select" aria-label="Default select example" name="txtusertype">
              <option selected value="reader">READER</option>
              <option value="owner">OWNER</option>
            </select>
            <label class="form-label">Select UserType</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger">
                  <?php echo e($message); ?>

              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          

          <!-- Submit button -->
        <center>  <button type="submit" class="btn btn-lg btn-block " style="background-color:#eb5d1e; border-radius: 12px; color:white; font-size: 24px;">Sign in</button>
        </center>
          <div class="d-flex mb-4" style="margin-top:20px;">
            <p>Already have an Account <a href="login">SIGN IN</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/main\signup.blade.php ENDPATH**/ ?>