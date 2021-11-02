<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
    @include("admin.navbar")
    <section style="padding-top:60px" class="w-100 m-5">
    <div class="container">
      <div class="row ">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Reservation
            </div>
            <div class="card-body">
             <table class="table table-bordered  table-light ">
               <thead>
                 <tr>
                   <th>name</th>
                   <th>Time</th>
                   <th>Date</th>
                   <th>Guest</th>
                   <th>Phone</th>
                   <th>description</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach($data as $data)
                 <tr>
                   <td>{{$data->name}}</td>
                   <td>{{$data->time}}</td>
                   <td>{{$data->date}}</td>
                   <td>{{$data->guest}}</td>
                   <td>{{$data->phone}}</td>
                   <td>{{$data->message}}</td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    @include("admin.adminscript")
  </body>
</html>