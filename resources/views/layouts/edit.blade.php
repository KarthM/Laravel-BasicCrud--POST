<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
<div class="container">
     <div class="row">
          <div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
Post 
</div>

    @if(Session::has('upatepost'))
<div class="alert alert-success" role="alert">
    {{Session::get('upatepost')}}
</div>
    @endif
<div class="card-body">
<form method="POST" action="{{route('post.updatepost')}}">
@csrf
<input type="hidden" name="id" value="{{$posts->Id}}"/>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="{{$posts->title}}"" placeholder="Enter title">
    
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="body" rows="3" placeholder="description">{{$posts->body}} </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>

</div>

</div>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>