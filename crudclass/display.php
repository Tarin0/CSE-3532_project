<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <table class="table">
  <thead class="thead-work">
    <tr>
      <th scope="col">ID </th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
    </tr>
  </thead>
  <?php
  include 'conn.php';
  $query = "SELECT * FROM user";
  $result = mysqli_query($conn,$query);
  while($res = mysqli_fetch_array($result)){
  ?>
  <tbody>
    <tr>
      <td><?php echo $res['id'] ?></td>
      <td><?php echo $res['username'] ?></td>
      <td><?php echo $res['password'] ?></td>
      <td><a href="delete.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
      <td><a href="update.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
    
    </tr>
     
  </tbody>
  <?php
  }
  ?>
</table>
            </div>
        </div>
    </div>
</body>
</html>