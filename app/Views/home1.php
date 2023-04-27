<head>
  <?php echo view('footer')?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php if($users){
        foreach($users as $user){
     ?>
    <tr>
      <th scope="row"><?php echo $user['id'] ?> </th>
      <td><?php echo $user['username'] ?></td>
      <td><?php echo $user['email']?></td>
      <td>
          <a href="<?php echo base_url('edit/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    <?php }}?>
    <br>
    
  </tbody>
</table>
<br>
<form action="/create">
    <button type="submit" class="btn btn-primary">create</button>
        </form>