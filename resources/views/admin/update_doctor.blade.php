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
    <base href="/public">
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

                <form method="post" action="{{ url('update_doctor',$doctor->id)}}" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label for="DocterName">Doctor Name</label>
                        <input  class="input" type="text" name="name" value="{{$doctor->name}}" >
                    </div>
                    <div >
                        <label for="DoctorPhone">Doctor's Phone Number</label>
                        <input class="input" type="text" name="phone" value="{{$doctor->phone}}">
                    </div>
                    <div>
                        <label for="Speciality">Speciality</label>
                        <input class="input" type="text" name="speciality" value="{{$doctor->speciality}}" >
                    </div>
                    <div>
                        <label for="room_no">Room No</label>
                        <input  class="input" type="text" name="room" value="{{$doctor->room}}" >
                    </div>
                    <div>
                        <label for="DoctorImage">Doctor Old Image</label>
                        <img src="/doctor_images/{{$doctor->image}}" style="height:55px; width:50px; display:inline-block;">
                    </div>
                    <div>
                        <label for="DoctorImage">Doctor New Image</label>
                        <input type="file" name="file" >
                    </div>
                    <div>
                        <button class="btn btn-primary doctor-submit" type="submit" >update</button>
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