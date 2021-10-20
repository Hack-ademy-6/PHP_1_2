<?php
 $user = "Gracia";
 $names = ["Nico", "Gemma", "Nahu"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Hola <?php echo $user;?></h1>
    <ul>
        <?php foreach ($names as $name) { ?>
             <li><?php echo $name ?></li>
        <?php }?>
       
        
    </ul>
</body>
</html>