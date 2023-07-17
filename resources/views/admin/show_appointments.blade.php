<!DOCTYPE html>
<html lang="en">
  <head>
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
                @foreach($data as $key => $data)
                <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name}}</td>
                <td>{{ $data->email}}</td>
                <td>{{ $data->phone}}</td>
                <td>{{ $data->doctor}}</td>
                <td>{{ $data->date}}</td>
                <td>{{ $data->message}}</td>
                <td>{{ $data->status}}</td>
                <td> <a class="btn btn-success" href="{{ url('approve',$data->id) }}">Approve</a>&nbsp;&nbsp;<a class="btn btn-danger" href="{{url('cancel',$data->id)}}">Cancel</a></td>
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