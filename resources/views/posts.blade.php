<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>All Posts</title>
    <!-- CSS only -->
  
</head>
<body>
    <section style="padding-top:60px;">
     <div class="container">
      <div class="row">
          <div class="col-md-12 ">
          <div class="card">
              <div class="card-header">
                  All  Posts <a href="/add-post" class="btn btn-success">Add New Post</a>
              </div>
              <div class="card-body">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Post Title</th>
                             <th>Post Description</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                         @foreach($posts as $post)
                         <td>{{$post->id}}</td>
                         <td>{{$post->title}}</td>
                         <td>{{$post->body}}</td>
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
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>