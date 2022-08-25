
<?php $__env->startSection('title','book form'); ?>
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
<?php $__env->startSection('header','BOOK FORM'); ?>
<?php $__env->startSection('details'); ?>
<form action="bookinsert" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <?php if(Session::has('success')): ?>
          <div class="alert alert-danger">
              <?php echo e(Session::get('success')); ?>

              <?php
                  Session::forget('success');
              ?>
          </div>
          <?php endif; ?>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aname">Author Name</label>
              </div>
              <div class="col">
                <select name="lstauthor" class="form-control">
                <?php $__currentLoopData = $aut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($a->authorid); ?>"><?php echo e($a->authorname); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pname">Publication Name</label>
              </div>
              <div class="col">
                <select name="lstpublication" class="form-control">
                <?php $__currentLoopData = $pub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($p->pubid); ?>"><?php echo e($p->pubname); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="type">BookType</label>
              </div>
              <div class="col">
                <select name="lstbooktype" class="form-control">
                <?php $__currentLoopData = $bktype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($bk->booktypeid); ?>"><?php echo e($bk->booktypename); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="bname">Book Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtbookname" id="bname" placeholder="Enter Book Name" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="sname">Short Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtshortname" id="sname" placeholder="Enter Short Name" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="tpage">Total Page</label>
              </div>
              <div class="col">
                <input type="number" class="form-control" name="txtpage" id="tpage" placeholder="Enter Page Number" >
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
              <div class="col-4">
                 <label for="price">Price</label>
              </div>
              <div class="col">
                <input type="number" class="form-control" name="txtprice" id="price" placeholder="Enter Price" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pdate">Publication Date</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtpubdate" id="pdate" placeholder="Enter Price" >
                
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pdate">No of Days</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtdays" id="pdate" placeholder="Enter Days" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="details">Details</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtdetails" id="details" placeholder="Enter Details" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="copies">Copies</label>
              </div>
              <div class="col">
                <input type="number" class="form-control" name="txtcopies" id="copies" placeholder="Enter Copies" >
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
<?php echo $__env->make('owner/ownerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/owner\book\bookform.blade.php ENDPATH**/ ?>