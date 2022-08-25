
<?php $__env->startSection('title','Reader Profile'); ?>

<?php $__env->startSection('details'); ?>
<div class="col-lg-12" style=" padding:20px;">
<h2>PROFILE</h2>

<form action="rprofile" method="post" enctype="multipart/form-data" class="cool-form" style="border:5px black solid; background-color:white; padding:20px; border-radius: 10px;">
<?php echo csrf_field(); ?>
<div class="col-lg-12" >
    <div class="row">

        <div class="col-lg-6">       
                                       
            <div class="form-group">
                <label for="ownername" class="form-label">Readername</label>
                <input type="text" class="form-control" name="txtfname" id="ownername" value="<?php echo e($reader['fname']); ?>"> 
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control"  name="txtaddress" id="address" rows="3"><?php echo e($reader['address']); ?></textarea>
            </div>
            <div class="form-group col-lg-6" style="padding-left: 0;" >
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" name="txtpincode" id="pincode" value="<?php echo e($reader['pincode']); ?>"> 
            </div>
            <div class="form-group col-lg-6" style=" padding-right: 0">
                <label for="birthdate" class="form-label">Birth Date</label>
                <input type="Date" class="form-control" name="txtbirthdate" id="birthdate"  value="<?php echo e($reader['birthdate']); ?>"> 
            </div>
            <div class="form-group">
                <label for="contactno" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="txtcontactno" id="contactno"  value="<?php echo e($reader['contactno']); ?>"> 
            </div>
            <div class="form-group">
                <label for="emailid" class="form-label">EmailID</label>
                <input type="email" class="form-control" name="txtemailid" id="emailid"  value="<?php echo e($reader['emailid']); ?>"> 
            </div>
                                   
                                     
                                  
        </div>
        <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-6">
            <div class="form-group">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="txtcity" id="city"  value="<?php echo e($reader['city']); ?>"> 
            </div>
            <div class="form-group">
            <p class="form-label">GENDER:</p>
                 <input type="radio" id="male" name="gender" value="male">
                 <label for="male">Male</label>
                 <input type="radio" id="female" name="gender" value="female">
                 <label for="female">Female</label>
                 <input type="radio" id="other" name="gender" value="other">
                 <label for="other">Other</label>
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="fupimage" id="photo"> 
            </div>

            <div class="form-group col-lg-6" style="padding-right: 0px;">                    
                
            </div>
                             
        </div>
        <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success " name="btnupdate" style=" font-weight: bold; font-size: 20px;">UPDATE</button>
                <button type="submit" class="btn btn-success pull-right" name="btncancel" style=" font-weight: bold; font-size: 20px;">CANCEL</button>
            </div>
        </div>
    </div>
</div>
</form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('reader/readerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/reader\readerprofile.blade.php ENDPATH**/ ?>