<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="user.php"   style="text-decoration: none; color: white;">Add user</a> </button>
   

    <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
   $sql="Select * from crud";
   $result=mysqli_query($con,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
    <button class="btn btn-primary">
        <a style="text-decoration: none; color: white;" href="update.php?updateid=<?php echo $id; ?>">Update</a>
    </button>
    <button class="btn btn-danger" style="margin-left: 10px;">
        <a style="text-decoration: none; color: white;" href="delete.php?deleteid=<?php echo $id; ?>">Delete</a>
    </button>
</td>

      </tr>';
    }
   }

  ?>
  
   
  </tbody>
</table>
</div>
</body>
</html>