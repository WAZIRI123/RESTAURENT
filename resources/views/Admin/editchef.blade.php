<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
            Update chef
          </div>
          <div class="card-body">
            @if(Session::has('Chef_updated'))
            <div class="alert alert-success" role="alert">
           {{Session::get('Chef_updated')}}
            </div>
            @endif
            <form action="{{url('savechefs',$data->id)}}"  method="post" enctype="multipart/form-data">

            @csrf
            <input type="hidden" name="id" value="{{$data->id}}"/>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$data->name}}">
            </div>
            <div class="form-group">
              <label for="speciality"></label>
              <input type="text" name="speciality" class="form-control" placeholder="speciality" value="{{$data->speciality}}">
            </div>
            <div >
              <label for="image"></label>
              <img src="/Chefsimage/{{$data->image}}" width=200 height=200 >
            </div>
            <div >
              <label for="image"></label>
             <input type="file" name="image" required>
            </div>
            <button class=" btn btn-success" type="submit"> Save chef</button>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    @include("admin.adminscript")
  </body>
</html>