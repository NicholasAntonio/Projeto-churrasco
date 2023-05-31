<?php
session_start();
include_once('config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['pass']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    header('Location: home.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./assets/icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/sessionStyle.css">
    <title>Churrasquin</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="./assets/icon.png" class="d-inline-block align-top" alt="">
            <h4>Churrasquin</h4>
        </div>

        <a href="./sair.php" class="btn mt-4">Sair</a>
    </nav>

    <div class="main-content">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Carne</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['carne'] . "</td>";
                    echo "<td>" . $user_data['quantidade'] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=$user_data[id]'><i class='uil uil-edit-alt'></i></a>
                            <a href='edit.php?id=$user_data[id]'><i class='1uil uil-x'></i></a>
                        </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>