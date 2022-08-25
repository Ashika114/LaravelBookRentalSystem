
<?php $__env->startSection('title','SignUp Page'); ?>

<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background-color: #eee;
}
</style>

<?php $__env->startSection('details'); ?>
<form action="/update" method="post">
      <?php echo csrf_field(); ?>

<section class="vh-500" style="background-color:#fef8f5;">
  <div class="container py-0 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-6 col-xl-5">
        <br><br><br><br><br><br>
        <img src="img/undraw_sign_in_re_o58h.svg"
          class="img-fluid" alt="reg image">
      </div>
      <div class="col-md-7 col-lg-6 col-xl-6 offset-xl-1">
      <h2 class="fw-bold" style="margin-bottom:20px;">UPDATE now</h2>
    
      <input type="hidden" value="<?php echo e($register['regid']); ?>" name="txtid" />
          <!-- Username input -->
          <div class="form-outline mb-4">
            <input type="text" id="username" name="txtusername" placeholder="Enter username" value="<?php echo e($register['username']); ?>" class="form-control form-control-lg"  />
            <label class="form-label" for="username">Username</label>
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" value="<?php echo e($register['password']); ?>" name="txtpassword" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="form-outline mb-4">
           <select class="form-select" aria-label="Default select example" name="txtusertype">
              <option value="admin">ADMIN</option>
              <option selected value="reader">READER</option>
              <option value="owner">OWNER</option>
            </select>
            <label class="form-label">Select UserType</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" name="txtemail" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
          <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
            role="button">
            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

      
      </div>
    </div>
  </div>
</section>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/main\update.blade.php ENDPATH**/ ?>