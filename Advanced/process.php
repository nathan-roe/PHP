<?php
    session_start();
    if($_POST["form"] == 'reset')
    {
        $_SESSION['answer'] = rand(1, 100);
    }
    else
    {
        if($_POST['guess'] == $_SESSION['answer'])
        {
            $_SESSION["goose"] = true;
            $_SESSION['answer'] = rand(1, 100);
        }
        else
        {
            $_SESSION["goose"] = false;
        }
    }
    header('Location: /');
?>