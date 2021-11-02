<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodmenu</title>
</head>
<body>
<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
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
                         @if (Session::has('addfood'))
                         <div class="alert alert-success" role="alert">
                             {{Session::get('addfood')}}
                         </div>
                         @endif
                         <form   method="post"  action="{{route('addfood')}}" enctype="multipart/form-data">
                         @csrf
                          
                         <div class="form-group">
                             <label for="title">Food Title:</label>
                             <input type="text" name="title" class="form-control" placeholder="Enter Food Title">
                         </div>
                         <div class="form-group">
                             <label for="description">Food Descriprition:</label>
                             <input type="text" name="description" class="form-control" placeholder="Enter Food Descriprition">
                         </div>
                         <div class="form-group">
                             <label for="image">Food image:</label>
                             <input type="file" name=" image" class="form-control" >
                         </div>
                         <div class="form-group">
                             <label for="price">Food price:</label>
                             <input type="num" name="price" class="form-control" placeholder="Enter Food price">
                         </div>
                         <div class="col text-center">
                         <button class="btn btn-success " type="submit">Add Food</button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <table class="table table-light mt-5 ">
         @if(session::has('food-delete'))
         <div class="alert alert-danger" role="alert">
          {{session::get('food-delete')}}
         </div>
         @endif
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>price</th>
                <th>image</th>
                <th>action</th>
            </tr>
           
        </thead>
        <tbody>
            @foreach ($data as $data)
           <tr>
               <td>{{$data->id}}</td>
               <td>{{$data->title}}</td>
               <td>{{$data->description}}</td>
               <td>{{$data->price}}</td>
               <td> <img  src="/foodimage/{{$data->image}} " ></td>
               <td > <a href="/deletefoodmenu/{{$data->id}}">Delete</a> </td>
               <td > <a href="/updatefoodview/{{$data->id}}">Update</a> </td>
           </tr> 
           @endforeach
        </tbody>
    </table>
    </section>

 
    @include("admin.adminscript")

  </body>
</html>
</body>
</html>