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
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Add chef
          </div>
          <div class="card-body">
            @if(Session::has('Chef_uploaded'))
            <div class="alert alert-success" role="alert">
           {{Session::get('Chef_uploaded')}}
            </div>
            @endif
            <form action="{{route('uploadchefs')}}"  method="post" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
              <label for="name"></label>
              <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="speciality"></label>
              <input type="text" name="speciality" class="form-control" placeholder="speciality">
            </div>
            <div class="form-group">
              <label for="name"></label>
              <input type="file" name="image" class="form-control" >
            </div>
            <button class=" btn btn-success" type="submit"> Add chef</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <table class="table table-light">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>image</th>
        <th>Speciality</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>
  <img src="/Chefsimage/{{$data->image}}" height=200 width=200>
        </td>
        <td>{{$data->speciality}}</td>
       
        <td><a href="/editchef/{{$data->id}}" class="btn btn-success">Update</a></td>
        <td><a href="/" class="btn btn-danger">Delete</td>
      </tr>
      @endforeach
    </tbody>

  </table>
  </section>

    @include("admin.adminscript")
  </body>
</html>