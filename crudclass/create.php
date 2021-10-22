<?php
 include 'conn.php';
 if(count($_POST)!=0)
{
    extract($_POST);
    $query = "INSERT INTO user (username,password) VALUES('$username','$password')";
    $result = mysqli_query($conn,$query);
    if($result == true)
    {
        echo "Record Inserted";
    }
    else
    {
        echo "Failed";
    }
}
?>

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
            <div class="col-lg-6 m-auto">
                  <form action="" method="POST">
                  <div class="card">
                      <div class="card-header bg-dark">
                          <h1 class="text-center text-white">
                              Insert Operation
                          </h1>
                      </div>
                      <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" name="username">
                      </div>
                      <div class="form-group">
                          <label for="username">Password</label>
                          <input type="password" class="form-control" name="password">
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  </form>
                  <h5><a href="display.php"><input type="button" class="btn btn-primary" value="View User"></a></h5>
            </div>
        </div>
    </div>
</body>
</html>