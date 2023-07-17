<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->
        
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="margin-left: 30px !important;">
          <div class="container" style="margin-top: 60px;">
            <a class="btn btn-secondary" style="float: right; margin-bottom:10px;" href="<?php echo e(route('downloadPDF')); ?>"><i class="fa fa-file-pdf-o" style="color:black;" aria-hidden="true"></i>Download PDF</a>
              <table id="doctor-tables" class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Room No</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><img height="100" src="doctor_images/<?php echo e($doctor->image); ?>"></td>
                    <td><?php echo e($doctor->name); ?></td>
                    <td><?php echo e($doctor->speciality); ?></td>
                    <td><?php echo e($doctor->phone); ?></td>
                    <td><?php echo e($doctor->room); ?></td>
                    <td> <a class="btn btn-primary" href="<?php echo e(url('edit_doctor',$doctor->id)); ?>">Edit</a>&nbsp;&nbsp;<a class="btn btn-danger" onclick="return confirm('Are you sure Delete this doctor?');" href="<?php echo e(url('delete_doctor',$doctor->id)); ?>">Delete</a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>  
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
</html><?php /**PATH C:\Users\HP\Desktop\Hospital Management Laravel\hospital-management\resources\views/admin/all_doctors.blade.php ENDPATH**/ ?>