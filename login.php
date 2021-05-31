<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

$conn=mysqli_connect('localhost','darley','yhvh77','gccc');
if(isset($_POST['user'])){
    $user=$_POST['user'];
    $result = mysqli_query($conn,"select user_login from tb_user where user_login='".$_POST['user']."' and user_password='".$_POST['password']."'");
    $sql = "select user_name from tb_user where user_login='".$_POST['user']."'";
    echo($sql );
    $resultNome = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($resultNome);
    $nome=$res[0];

    $res = mysqli_num_rows($result);
    if($res > 0){
        setcookie('user', $user);
        setcookie('nome', $nome);
        header ("location: index.php");
    }else{
        header ("location: login.php?erro=1");
        
    }
}
?>
<div class="card text-center" style="width: 18rem;margin-left:350px;margin-top:150px">
<div class="card-header">
    Sistema de Scrips
</div>
  <div class="card-body" >
        <div class="container-fluid">
        <?php 
            if(isset($_GET['erro'])){
                if($_GET['erro']==1){
                    echo("<div class='alert alert-danger' role='alert'>");
                    echo("Usuário ou senha errados");
                    echo("</div>");
                    
                }
            }
            ?>
            <h5 class="card-title">Autenticação</h5>
            <p class="card-text" >Digitar se usuário e senha. Se você for civil digite o login do SRU</p>
          <form action="login.php" method="post">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" id="user" name="user" aria-describedby="userHelp">
                    <small id="userHelp" class="form-text text-muted">Nunca compartilhe seu login.</small>
                </div>
                <div class="form-group">
                    <label for="senha">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <br>
                <div style="margim-top:20px">
                    <button type="submit" class="btn btn-primary" >Entrar</button>
                </div>
            </form>
            <div class="card-footer text-muted">
            © 2021 Copyright - PMMG MPMG
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <script src="js/main.js"></script>

</body>
</html>