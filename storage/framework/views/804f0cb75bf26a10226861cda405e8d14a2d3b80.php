<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Show DATA</title>
</head>
<body>

    <table class="table">
    <thead class="thead-dark">
       <a href="signup">NEW
        <tr>
        <th scope="col">REGID</th>
        <th scope="col">REGNAME</th>
        <th scope="col">PASSWORD</th>
        <th scope="col">DELETE</th>
        <th scope="col">UPDATE</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $register; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($reg['regid']); ?></th>
        <td><?php echo e($reg['username']); ?></td>
        <td><?php echo e($reg['password']); ?></td>
        <td><a href="delete/<?php echo e($reg['regid']); ?>">DELETE</td>
        <td><a href="search/<?php echo e($reg['regid']); ?>">UPDATE</td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
      
</body>
</html><?php /**PATH D:\MCA_PROJECT\book\resources\views/main/viewData.blade.php ENDPATH**/ ?>