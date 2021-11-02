<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")


  </head>
  <body>
    @include("admin.navbar")
    <div class="container">
    <h1>Orders</h1>
     <form action="{{url('/search')}}" method="get">
    @csrf
    <input type="text" name="search" style="color:blue">
    <input type="submit"  value="search" class="btn btn-success">
    </form>
   <table class="table table-light">
     <thead>
       <tr>
       <td>Name</td>
       <td>Phone</td>
       <td>FoodName</td>
       <td>Price</td>
       <td>Quantity</td>
       <td>Total Price</td>
</tr> 
</thead>
     <tbody>
       @foreach($data as $data)
       <tr>
         <td>{{$data->name}}</td>
         <td>{{$data->phone}}</td>
         <td>{{$data->foodname}}</td>
         <td>{{$data->price}}</td>
         <td>{{$data->quantity}}</td>
         <td>{{$data->price *$data->quantity}}</td>
       </tr>
       @endforeach
     </tbody>
   </table>
   </div>
    @include("admin.adminscript")
  </body>
</html>