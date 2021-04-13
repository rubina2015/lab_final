<?php 
    include "database.php";
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_REQUEST['name'];
        $password = $_REQUEST['password'];
        $sql = "SELECT * FROM `student` WHERE user_name='$name' and password='$password'";
        $res = mysqli_query($conn, $sql);
        $user = $res->fetch_assoc();
        if($res == true){
            if(mysqli_num_rows($res) == 1){
                $_SESSION["auth"] = "validate";
                $_SESSION["name"] = $user['name'];
                header("Location:show_data.php");
            } else {
                echo "<h1>Invalid data</h1>";
            }
        }
        else{
            echo "There is something error in your data";
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
</head>
<body>
<form action="" method="POST">
  <label for="fname">Username:</label><br>
  <input type="text" id="fname" name="name"><br>
  <label for="lname">Password</label><br>
  <input type="password" id="lname" name="password"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>