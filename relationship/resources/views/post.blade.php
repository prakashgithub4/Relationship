<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>one to one</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
      </tr>
    <h2>Basic Table</h2>
  <p>one to maney</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($user_post as $post)
      <tr>
       
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </tbody>
   
</div>

</body>
</html>
