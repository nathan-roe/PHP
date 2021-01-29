<?php
    if(empty($_SESSION))
    {
        $_SESSION['answer'] = rand(1, 100);
    }
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        div {
            width: 12.5vw;
            height: 16vh;
            padding-top: 8vh;

            text-align: center;
        }
            .right {
                background-color: green;
            }
            .wrong {
                background-color: red;
            }
    </style>
</head>
<body>
    <h1>Welcome to the great number game!</h1>
    <h2>I'm thinking of a number between 1 and 100</h2>
    <p>
        Take a guess!
        <form action="/process.php" method="post">
            <input type="hidden" name="form" value="reset">
            <input type="submit" value="Reset">
        </form>
    </p>
    <form action="/process.php" method="post">
        <input type="hidden" name="form" value="make_guess">
        <input type="number" name="guess">

        <input type="submit" value="Submit">
    </form>
    <?php
        if(isset($_SESSION["goose"]))
        {
            if($_SESSION["goose"])
            {
                echo "<div class='right'>You got it right!</div>";
            }
            else
            {
                echo "<div class='wrong'>Sorry that wasn't right!</div>";
            }
        }
    ?>
</body>
</html>