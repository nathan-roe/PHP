<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        html {
            width: 100%;
            height: 100%;
        }
        body {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            outline: 1px solid blue;
        }
        div {
            height: 12.2vh;
            width: 12.2vw;
        }
        .red {
            background-color: red;
        }
        .black {
            background-color: white;
        }
    </style>
</head>
<body>
        <?php
            $boolVal = true;
            for($i=0;$i<64;$i++)
            {
                if($i - 1 % 8 == 0 && $i > 8)
                {
                    $boolVal = !$boolVal;
                }
                if($boolVal)
                {
                    if($i % 2 == 0)
                    {
                        echo "<div class='red'>Hello World</div>";
                    }
                    else
                    {       
                        echo "<div class='black'></div>";
                    }
                }
                else
                {
                    if($i % 2 != 0)
                    {
                        echo "<div class='red'>Hello World</div>";
                    }
                    else
                    {       
                        echo "<div class='black'></div>";
                    }
                }
            }
        ?>
    <div></div>
</body>
</html>