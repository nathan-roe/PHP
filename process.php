<?php
    session_start();
    if($_POST["action"] == 'farm')
    {
        $val = rand(10, 20);
        array_push($_SESSION['feed'], "You earned " . $val . " at the farm");
    }
    else if($_POST["action"] == 'cave')
    {
        $val = rand(5, 10);
        array_push($_SESSION['feed'], "You earned " . $val . " at the cave");
    }
    else if($_POST["action"] == 'house')
    {
        $val = rand(2, 5);
        array_push($_SESSION['feed'], "You earned " . $val . " at the house");
    }
    else if($_POST["action"] == 'casino')
    {
        $val = rand(-50, 50);
        if($val > 0)
        {
            array_push($_SESSION['feed'], "You earned " . $val . " at the casino");
        }
        else
        {
            array_push($_SESSION['feed'], "You lost " . $val . " at the casino");
        }
    }
    header('Location: /');
?>