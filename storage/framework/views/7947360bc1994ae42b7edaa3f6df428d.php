<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }

        .container input.input {
            color: black;
        }

        .container select {
            width: 205px;
            color: black;
        }

        .container, .container div {
            padding-top: 20px;
            margin-left: 150px;
        }

        .doctor-submit {
            margin-left: 320px;
            margin-top: 30px;
        }
    </style>
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
            <div class="container" >

              <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                  <?php echo e(session()->get('message')); ?>

                </div>
              <?php endif; ?>

                <form method="post" action="<?php echo e(url('upload_doctor')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div>
                        <label for="DocterName">Doctor Name</label>
                        <input  class="input" type="text" name="name" required>
                    </div>
                    <div >
                        <label for="DoctorPhone">Doctor's Phone Number</label>
                        <input class="input" type="text" name="phone" required>
                    </div>
                    <div>
                        <label for="Speciality">Speciality</label>
                        <select name="speciality" id="Speciality">
                        <option value="">None Selected</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Nephrology">Nephrology</option>
                        <option value="Rheumatology">Rheumatalogy</option>
                        <option value="Opthalmology">Opthalmology</option>
                        <option value="Gastero Enterology">Gastero Enterology</option>
                        </select>
                    </div>
                    <div>
                        <label for="room_no">Room No</label>
                        <input  class="input" type="text" name="room" required>
                    </div>
                    <div>
                        <label for="DoctorImage">Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>
                    <div>
                        <button class="btn btn-primary doctor-submit" type="submit" >Submit</button>
                    </div>
                </form>
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
</html><?php /**PATH C:\Users\HP\Desktop\Hospital Management Laravel\hospital-management\resources\views/admin/add_doctor.blade.php ENDPATH**/ ?>