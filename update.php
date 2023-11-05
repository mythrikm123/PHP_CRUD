<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter the Name" name="name"
                  value=<?php echo $name
                  ?>  autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    placeholder="Enter the email" value=<?php echo $email
                  ?> autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter the mobile number"
                value=<?php echo $mobile
                  ?>  autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                value=<?php echo $password
                  ?>  placeholder="Enter the password" autocomplete="off">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>