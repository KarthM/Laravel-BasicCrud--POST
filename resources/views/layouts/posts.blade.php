<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
  
    <section>
    <div class="container">
       <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header text-center">
    All Post
    </div>
    @if(Session::has('postdeleted'))
<div class="alert alert-success" role="alert>
{{Session::get('postdeleted')}}
</div>
    @endif
    <div class="card-body">
           <table class="table">
                 <thead>
    <tr>

    <th>Title</th>
    <th>Description</th>
    <th>Action</th>
    </tr>
            </thead>
    <tbody>
    @foreach($post as $posts)
    <tr>
    <td>{{$posts->title}}</td>
    <td>{{$posts->body}}</td>
    <td> <a href="/post/{{$posts->Id}}" class="btn btn-success">view</a>
    <td> <a href="/editpost/{{$posts->Id}}" class="btn btn-warning">edit</a>
    <td> <a href="/deletepost/{{$posts->Id}}"class="btn btn-info">delete</a>
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
</body>
</html>