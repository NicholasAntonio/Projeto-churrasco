<?php 
    include_once('config.php');

    if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $carne = $_POST['carne'];
            $quantidade = $_POST['quantidade'];

            $sqlUpdate = "UPDATE usuarios SET nome = '$name', telefone = '$phone' ,email = '$email', senha = '$pass' ,carne = '$carne', quantidade = '$quantidade' WHERE id='$id'";

            $result = $conexao->query($sqlUpdate);
    }
    header('Location: sessao.php');

?>