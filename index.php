<?php
    session_start();
    if(empty($_SESSION))
    {
        echo "Empty";
        $_SESSION['feed'] = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0; margin: 0;
        }
        html {
            width: 100%;
            height: 100%;
        }
        body {
            width: 100%;
            height: 100%;
        }
        .main {
            width: 90%;
            height: 50vh;
            display: flex;
            justify-content: space-evenly;
        }
        .display {
            width: 90%;
            height: 35vh;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <div class='main'>
        <div>
            <h2>Farm</h2>
            <p>Earns 10-20 gold</p>
            <form action="/process.php" method="post">
                <input type="hidden" name="action" value="farm">
                <input type="submit" value="Find gold">
            </form>
        </div>
        <div>
            <h2>Cave</h2>
            <p>Earns 5-10 gold</p>
            <form action="/process.php" method="post">
                <input type="hidden" name="action" value="cave">
                <input type="submit" value="Find gold">
            </form>
        </div>
        <div>
            <h2>House</h2>
            <p>Earns 2-5 gold</p>
            <form action="/process.php" method="post">
                <input type="hidden" name="action" value="house">
                <input type="submit" value="Find gold">
            </form>
        </div>
        <div>
            <h2>Casino!</h2>
            <p>Earns/Takes 0-50 gold</p>
            <form action="/process.php" method="post">
                <input type="hidden" name="action" value="casino">
                <input type="submit" value="Find gold">
            </form>
        </div>
    </div>
    <div class="display">
        <?php
            if(isset($_SESSION["feed"]))
            {
                foreach($_SESSION['feed'] as $val)
                {
                    echo "<p>$val</p>";
                }
            }
        ?>
    </div>
</body>
</html>