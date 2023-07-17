<!DOCTYPE html>
<html lang="en">
  <head>
  
 <style>
        
        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }
 </style>
  </head>


<body>
    <h1 style="text-align: center">Doctor Details</h1>
    <div class="container-fluid page-body-wrapper" style="margin-left: 30px !important;">
        <div class="container" style="margin-top: 30px;">
    

<table id="doctor-tables" class="table table-dark" style="border: 1px !important;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Speciality</th>
        <th scope="col">Phone</th>
        <th scope="col">Room No</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($key+1); ?></td>
        <td><?php echo e($doctor->name); ?></td>
        <td><?php echo e($doctor->speciality); ?></td>
        <td><?php echo e($doctor->phone); ?></td>
        <td><?php echo e($doctor->room); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div></div>
</body>

</html><?php /**PATH C:\Users\HP\Desktop\Hospital Management Laravel\hospital-management\resources\views/hello.blade.php ENDPATH**/ ?>