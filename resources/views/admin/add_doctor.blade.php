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
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
        
      @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div class="container" >

              @if(session()->has('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
              @endif

                <form method="post" action="{{ url('upload_doctor')}}" enctype="multipart/form-data">
                    @csrf

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
    @include('admin.script')
  </body>
</html>