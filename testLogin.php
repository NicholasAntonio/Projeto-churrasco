<?php
    session_start();
    /*print_r($_REQUEST);*/
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
        include_once('config.php');
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$pass'";

        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['pass']);
            header('Location: index.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            header('Location: sessao.php');
        }
    } else {
        header('Location: index.php');
    }

    ?>