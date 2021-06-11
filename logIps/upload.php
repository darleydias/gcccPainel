<!DOCTYPE html>
<?php
$ultimoIdIp="";
$usuario=1096841;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $processo=$_POST["codProcess"];
}
//$processo="656565red879";

$conn = mysqli_connect("localhost", "darley", "yhvh77", "gccc");
if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

$query = "select * from tb_ip";
$result=mysqli_query($conn,$query);

$dados = array();
$ip=array();
$dh=array();
// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'uploads/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('txt', 'pdf', 'docx');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$temp = explode('.', $_FILES['arquivo']['name']);
$extensao = strtolower(end($temp));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: txt, docx ou pdf";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .txt
$nome_final = time().'.txt';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
        $line="";
        //echo "Upload efetuado com sucesso!";
        //echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
        $file_handle = fopen($_UP['pasta'] . $nome_final, "r");
        echo($_UP['pasta'] . $nome_final);
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            //array_push($dados,$line);
            echo($line);
        }
fclose($file_handle);
?>
          
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

<div class="col-md-12" style="margin-left: 200";>
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-light">
                <div class="container" style="margin-left:600px">
                    <a class="navbar-brand" href="#">
                        Sistema de Scripts do Whatsapp

                    </a>
                </div>
            </nav>
        </div>
    </div>
<div class="row">
    <div class="col-md-3">
       <?php include_once("menu.php");?>
    </div>

        <div class="col-md-9">
           <?php 
                $tam=count($dados);
                echo($tam);
                $indice=$tam-1;
                
                // Fazer algo para cada linha
                while($tam>0){
                    //Pega cada linha
                    //Pega IP
                    preg_match("([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})", $dados[$indice], $ip_matches);
                    //echo(preg_last_error());
                    array_push($ip,$ip_matches[0]);
                    $sqlTeste="select ip_ip from tb_ip where ip_ip ='".$ip_matches[0]."'";
                    $resTeste=mysqli_query($conn,$sqlTeste);
                    if(!mysqli_num_rows($resTeste)>0){
                        //Grava IP
                        $sql="insert into tb_ip (ip_codProcess,ip_usu,ip_ip) values ('".$processo."',".$usuario.",'".$ip_matches[0]."')";
                        mysqli_query($conn,$sql);
                        $ultimoIdIp = mysqli_insert_id($conn);
                    }
                    //grava data / Hora
                    
                    preg_match("([0-3][0-9]/[A-Z][a-z][a-z]/[1-2][0-9][0-9][0-9]:[0-2][0-9]:[0-5][0-9]:[0-5][0-9] -0300)",$dados[$tam],$match);
                    $sqlInsertDh="insert into tb_dh (dh_idIp, dh_dh,dh_usu) values (".$ultimoIdIp.",'".$match[0]."','".$usuario."')";
                    echo($sqlInsertDh);
                    mysqli_query($conn,$sqlInsertDh);
                    $tam=$tam-1;
                }
                } else {
                    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
                    echo "Não foi possível enviar o arquivo, tente novamente";
                }
                
                }
                $sqlProcesso="SELECT ip_codProcess FROM tb_ip";
                $resPro=mysqli_query($conn,$sqlProcesso);


           
           ?>
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