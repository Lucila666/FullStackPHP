<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style13.css">
   
</head>
<body>
    
<h1>Bienvenido al Sistema</h1>
    <?php echo "<h2>Los datos ingresados son: </h2>"; ?>
    <?php
        
        echo '<h3>Tu Usuario:'  . $_POST["usuario"] . '<br></h3>';
       echo '<h3>Tu Clave: ' . $_POST["pass"] . '<br></h3>';
        
    ?>
</body>
</html>