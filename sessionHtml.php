<?php session_start();?>

<!doctype html>
<html lang="en">

<head>
  <title>Inicio sesion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container-fluid text-white text-center bg-dark">
        <div class="row">
        <div class="col-md-8">
        <h1>Clase 27/09/2022</h1>
        </div>
        <div class="col-md-4">
            <a href="logout.php">Cerrar sesión</a>
        </div>
        </div>
    </div>
  </header>
  <main>
    <?php if(isset($_SESSION['user'])) { echo $_SESSION['user']; }?>
    <div class="container text-center text-white bg-dark">
    <form action="" method="POST">
        <br>
        USUARIO:
        <br>
        <input type="text" name="user">
        <br>
        CONTRASEÑA: 
        <br>
        <input type="password" name="pass">
        <br>
        <br>
        <input type="submit" name="send" value="Iniciar Sesión">
    </form>
    <?php
    if(isset($_POST['send'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if($user=="reaper" && $pass=="123456"){
            echo "Sesión iniciada!";
            $_SESSION ['session']=true;
            echo $_SESSION['session'];
            echo $_SESSION['user']=$user;
            header('Location: '.'sessionHtml.php');
        }
    else{
        echo "Error de autenticación :c";
    }
    }
    
    ?>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>