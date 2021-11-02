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
    <section style="padding-top:60px;"class="w-100 m-5">
     <div class="container">
         <div class="row">
             <div class="col-md-12 ">
                 <div class="card">
                     <div class="card-header">
                         Add Food
                     </div>
                     <div class="card-body">
                         @if (Session::has('updatefood'))
                         <div class="alert alert-success" role="alert">
                             {{Session::get('updatefood')}}
                         </div>
                         @endif
                         <form   method="post"  action="{{url('updatefood',$data->id)}}" enctype="multipart/form-data">
                         @csrf
                          
                         <div class="form-group">
                             <label for="title">Food Title:</label>
                             <input type="text" name="title" class="form-control" value="{{$data->title}}">
                         </div>
                         <div class="form-group">
                             <label for="description">Food Descriprition:</label>
                             <input type="text" name="description" class="form-control" value="{{$data->description}}">
                         </div>
                     
                         <div class="form-group">
                             <label for="price">Food price:</label>
                             <input type="num" name="price" class="form-control" value="{{$data->price}}">
                         </div>
                         <div class="form-group">
                             <label for="image">Old Food image:</label>
                             <img height="200" width="200" src="/foodimage/{{$data->image}}">
                           
                         </div>
                         <div class="form-group">
                             <label for="image">New Food image:</label>
                             <input type="file" name="image" class="form-control">
                         </div>

                         <div class="col text-center">
                         <button class="btn btn-success " type="submit">update Food</button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    @include("admin.adminscript")
  </body>
</html>