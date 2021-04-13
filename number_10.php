<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $color = array('white', 'green', 'red');
    ?>
    <ol type="A">
    <li>
        <?php for($i=0;$i<count($color);$i++){ 
            echo $color[$i] . ", ";
        } ?></li>
        <li></li>
        
    </ol>

    <ul>
    <?php for($i=0;$i<count($color);$i++){ ?>
        <li> <?php echo $color[$i] ?></li>
        <?php } ?>
    </ul> 
</body>
</html>