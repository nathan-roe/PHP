<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>The session id is <?php session_id()?></h2>
    <h2>And your session name is:</h2>
    <p><?php echo "{$_SESSION['first']} {$_SESSION['last']}"?></p>
</body>
</html>