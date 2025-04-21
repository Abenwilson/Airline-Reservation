<?php
session_start();
include("admin/includes/dbconnect.php");
if(isset($_POST["submit"]))
{
    $username=$_POST["uname"];
    $password=$_POST["pass"];
     $sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
     $res= mysqli_query($conn,$sql);
     if(mysqli_num_rows($res)>0)
     {
        $val=mysqli_fetch_array($res);
        $_SESSION['user_id']= $val['login_id'];

        if($val['user_type']=='admin')
        {
        header("location:admin/index.php");
        exit();
         }
     else if($val['user_type']=='user')
     {
        header("location:index.php");
     
     exit();
     }
     else
     {
        echo"error";
        header("location:index.php");
        exit();
     }
     
    }
    else
    {
       echo"error";
       header("location:index.php");
       exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
                    <input type="text" class="form-control" id="uname" name="uname" placeholder="User Name"><br>
                    <input type="text" class="form-control" id="pass" name="pass" placeholder="Password"><br>             
                    <input type="submit" class="btn btn-primary" id="submit" name = "submit">
</form>

</body>
</html>