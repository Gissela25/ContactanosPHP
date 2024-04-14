<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <input type="text" name="name" placeholder="name" require>
        <input type="email" name="email" placeholder="email" require>
        <input type="text" name="asunto" placeholder="asunto" require>
        <textarea name="msg" placeholder="mensaje"></textarea>
        <input type="submit" name="enviar">
    </form>
    <?php
    include("correo.php");
    ?>
</body>

</html>