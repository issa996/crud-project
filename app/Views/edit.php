<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1> create new post</h1><br>
<form action="<?php echo base_url('/update') ?> " method="POST">
<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
<div class="form-group">
    <label for="exampleInputEmail1">user name</label>
    <input type="text" class="form-control"  value="<?php echo $user['username'] ?>" name="username">
    <small id="emailHelp" class="form-text text-muted">please enter your name</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user['email'] ?>" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  
  <button type="submit" class="btn btn-primary">update</button>
</form>