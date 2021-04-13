<?php
include "database.php";
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);
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
    <h1>
    <?php 
        if ($rowcount == 0){
            echo "No Data found";
        } else {
    ?></h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>Username</th>
            <th>Delete</th>
        </tr>
        <?php
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['no']; ?>">Delete</a></td>
        </tr>
        <?php }
        ?>
    </table>

    <?php }
    ?>           
    
</body>
</html>