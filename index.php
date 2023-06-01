<?php

  if (isset($_POST['submit'])) {
    /* print_r('Nome:'.$_POST['name']);
      print_r('<br>');
      print_r('Carne que vai levar:'.$_POST['food']);
      print_r('<br>');
      print_r('Quantidade:'.$_POST['qtd']);*/
    include_once('config.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $carne = $_POST['carne'];
    $quantidade = $_POST['quantidade'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios( nome, telefone,email,senha,carne,quantidade) VALUES ('$name','$phone','$email','$pass','$carne','$quantidade')");
  }


  ?> <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <title>Churrasquin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/homeStyle.css">
  </head>

  <body>
    <div class="section">
      <div class="container">
        <div class="row full-height justify-content-center">
          <div class="col-12 text-center align-self-center py-5">
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              <h6 class="mb-0 pb-3"><span>Login</span><span>Registre-se</span></h6>
              <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
              <label for="reg-log"></label>
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">
                  <form action="./testLogin.php" method="POST" class="card-front">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3">Login
                        </h4>
                        <div class="form-group">
                          <input type="email" class="form-style" placeholder="Email" name="email">
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Senha" name="pass">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <input type="submit" name="submit" value="Login" class="btn mt-4">
                        <p class="mb-0 mt-4 text-center"><a href="#" class="link">Esqueceu sua senha?</a></p>
                      </div>
                    </div>
                  </form>
                  <div class="card-back">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <form action="./home.php" method="POST">
                          <h4 class="mb-3 pb-3">Cadastre-se no churras</h4>
                          <div class="form-group">
                            <input type="text" class="form-style" placeholder="Nome" name="name" required>
                            <i class="input-icon uil uil-user"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="tel" class="form-style" placeholder="Telefone" name="phone" required>
                            <i class="input-icon uil uil-phone"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="email" class="form-style" placeholder="Email" name="email" required>
                            <i class="input-icon uil uil-at"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="password" class="form-style" placeholder="Senha" name="pass" required>
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" class="form-style" placeholder="Tipo de carne" name="carne" required>
                            <i class="input-icon uil uil-shopping-cart-alt"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="text" class="form-style" placeholder="Quantidade" name="quantidade" required>
                            <i class="input-icon uil uil-balance-scale"></i>
                          </div>

                          <button type="submit" class="btn mt-4" name="submit">Cadastrar</button>
                        </form>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>