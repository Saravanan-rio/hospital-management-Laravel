<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
        
      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="margin-left: 30px !important;">
          <div class="container" style="margin-top: 60px;">
            <a class="btn btn-secondary" style="float: right; margin-bottom:10px;" href="{{route('downloadPDF')}}"><i class="fa fa-file-pdf-o" style="color:black;" aria-hidden="true"></i>Download PDF</a>
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
                  @foreach($doctors as $key=>$doctor)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td><img height="100" src="doctor_images/{{$doctor->image}}"></td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->room}}</td>
                    <td> <a class="btn btn-primary" href="{{ url('edit_doctor',$doctor->id) }}">Edit</a>&nbsp;&nbsp;<a class="btn btn-danger" onclick="return confirm('Are you sure Delete this doctor?');" href="{{url('delete_doctor',$doctor->id)}}">Delete</a></td>
                  </tr>
                  @endforeach
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
    @include('admin.script')

  </body>
</html>