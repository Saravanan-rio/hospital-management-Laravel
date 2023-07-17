<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->
        
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="margin-top: 30px;">
    
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Patient Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">Date</th>
                  <th scope="col">Message</th>
                  <th scope="col" style="text-align: right">Status</th>
                  <th scope="col" style="text-align: center">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($key+1); ?></td>
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->phone); ?></td>
                <td><?php echo e($data->doctor); ?></td>
                <td><?php echo e($data->date); ?></td>
                <td><?php echo e($data->message); ?></td>
                <td><?php echo e($data->status); ?></td>
                <td> <a class="btn btn-success" href="<?php echo e(url('approve',$data->id)); ?>">Approve</a>&nbsp;&nbsp;<a class="btn btn-danger" href="<?php echo e(url('cancel',$data->id)); ?>">Cancel</a></td>
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
</html><?php /**PATH C:\Users\HP\Desktop\Hospital Management Laravel\hospital-management\resources\views/admin/show_appointments.blade.php ENDPATH**/ ?>