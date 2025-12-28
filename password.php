<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>

    <h1>La tua password di X caretteri </h1>

    <pre> <?php echo $_SESSION["password"] ?> </pre>
</body>

</html>