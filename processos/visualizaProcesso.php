<!DOCTYPE html>
<?php

if($_COOKIE['user']==''){
    header("Location: login.php");
}

?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/sidebar-themes.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Modal -->
<?php include_once("corpoModal.php");?>
<!-- Fim Modal -->
<div class="row align-items-center">
    <div class="col-md-8"> 
    <div class="container" style="margin-left:280px">
            <nav class="navbar navbar-light bg-light">
                    <div class="row align-items-center">
                        <div class="col-md-2 ">
                            <a href="index.php" style="text-decoration: none;">
                                <i class="fa fa-list-alt fa-3x" aria-hidden="true" style="color: #1c1c0c;"></i>
                            </a>
                        </div>
                        <div class="col-md-10 mw-100">
                            <p class="font-weight-bold text-uppercase">&nbsp;&nbsp;&nbsp;Investigação Cibernética</p> 
                        </div>
                    </div>

            </nav>
            <br>
            <div class="row align-items-start justify-content-start">
                <div class="col-md-2 "></div>
                <div class="col-md-10"></div>
                    <div>
                        <i class="fas fa-square" style="color: #5CB85C;"></i>  Status atual &nbsp;&nbsp;&nbsp;<i class="fas fa-square" style="color: #FFA500;"></i> passou aqui
                    </div>
                </div>

            </div>
            
                                                            <!--SOLICITAR -->

                <table  style="margin-left:300px;position:absolute;left:150px;top:130px;font-size:12px'">
                    <tbody>
                        <tr><td>Solicitante</td></tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#solicitaModal" data-whatever="@getbootstrap">
                                    <i class='fas fa-bullseye'></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i id="seta1" class='fas fa-arrow-down'></i>
                            </td>
                        </tr>
                    <tbody>
                </table>

                                            <!--COORDENADOR -->  
                <table  style="margin-left:300px;position:absolute;left:80px;top:200px;font-size:12px'">
                    <tbody>
                        <tr style="">
                            <td>
                                <div class="card" style="width:200px">
                                    <div class="card-header">
                                        Coordenador
                                    </div>
                                    <div class="card-body text-white bg-success mb-3 text-center">
                                        <h5 class="card-title">Analisar Demanda</h5>
                                        <p class="card-text"></p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                        Ver mais
                                        </button>
                                    </div>
                                
                                </div>
                            </td>
                             <td>
                                    <div class="card-body">
                                    <i id="seta2" class='fas fa-arrow-left' style='margin-left:-10px;padding-left:0;color: #5CB85C;'> <div style='position: absolute;left:230px;top:96px;font-size:16px;color: #5CB85C'>1</div> </i>
                                    
                            </td>
                        </tr>
                       
                    <tbody>
                </table>
                                                <!--SETA DOW --> 

                <table  style="margin-left:300px;position:absolute;left:95px;top:200px;font-size:12px'">
                    <tr>
                        <td>
                        <i id="seta3" class='fas fa-arrow-down' style='position:absolute;left:80px;top:175px'></i>
                        </td>
                    </tr>
                </table>

                                            <!--GATEWAY --> 

                <table  style="margin-left:300px;position:absolute;left:0px;top:400px;font-size:12px'">
                    <tr>
                        <td>
                        É competencia <br>da COERCIBER?
                        </td>
                        <td>
                        <img src="../images/gateway.png" width="80" style="position: absolute;left:140px;top:-10px" />
                        </td>
                        <td>
                        
                        <i id="seta4" class='fas fa-arrow-right' style='position: absolute;left:220px;top:25px;color:#b85c5c'></i>
                        </td>
                        <td>
                        <i class="fas fa-envelope-open fa-2x" style='position: absolute;left:250px;top:20px;font-size:24px;color:#b85c5c'></i>
                        <!--i class="fa fa-circle" aria-hidden="true" style='position: absolute;left:250px;top:20px;font-size:24px;color:#b85c5c'></i-->
                        </td>
                        <td>
                        <i id="seta5" class='fas fa-arrow-up' style='position: absolute;left:400px;top:0px;font-size:16px;color: #5CB85C'>
                        <div style='position: absolute;left:20px;top:0px;font-size:16px;color: #5CB85C'> 1 </div> </i><!-- Seta UP-->
                        </td>
                        
                    </tr>
                    
                </table>   
                <!-- segundo gateway-->
                                                <!--SETA DOW --> 

                <table  style="margin-left:300px;position:absolute;left:95px;top:300px;font-size:12px'">
                    <tr>
                        <td>
                        <i id="seta31" class='fas fa-arrow-down' style='position:absolute;left:80px;top:175px;color:#5CB85C'></i>
                        </td>
                    </tr>
                </table>

                                            <!--GATEWAY --> 

                <table  style="margin-left:300px;position:absolute;left:0px;top:500px;font-size:12px'">
                    <tr>
                        <td>
                        Necessita dados<br> complemetares?
                        </td>
                        <td>
                        <img src="../images/gateway.png" width="80" style="position: absolute;left:140px;top:-10px" />
                        </td>
                        <td>
                        <img src="../images/setaVdDir.png" width="60" style="position: absolute;left:220px;top:20px;color:#5CB85C">
                        <!--i id="seta41" class='fas fa-arrow-right' style='position: absolute;left:220px;top:25px;color:#5CB85C'></i-->
                        </td>
                        <td>
                                <div class="card bg-warning mb-3" style="width:290px;position: absolute;left:280px;top:-60px;">
                                    <div class="card-header">
                                        Solicitante &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle-notch" > 2 </i>
                                    </div>
                                    <div class="card-body text-primary text-center">
                                        <h5 class="card-title">Fornecer dados Complementares</h5>
                                        <p class="card-text"></p>
                                        <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                                    </div>
                                </div>
                        </td>
                    </tr>
                    
                </table>   
                
                <table  style="margin-left:300px;position:absolute;left:173px;top:570px;font-size:12px'">
                    <tr>
                        <td>
                         <i id="seta19" class='fas fa-arrow-down' style='color: #b85c5c'></i><!-- seta down-->
                        </td>
                    </tr>
                </table>   
                <table  style="margin-left:300px;position:absolute;left:0px;top:600px;font-size:12px'">
                    <tr>
                        <td>
                        <div class="card -success mb-3" style="width: 18rem;">
                                    <div class="card-header">
                                        Assessoria jurídica
                                    </div>
                                    <div class="card-body text-primary text-center">
                                        <h5 class="card-title">Fazer análise preliminar</h5>
                                        <p class="card-text"></p>
                                        <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                                    </div>
                                </div>
                        </td>
                        <td>
                        <i id="seta22" class='fas fa-arrow-left' style='position:absolute;left:300px;top:80px;color: #5CB85C;'> </i>
                        </td>
                    </tr>
                </table>   
                <table  style="margin-left:300px;position:absolute;left:173px;top:710px;'">
                    <tr>
                        <td>
                         <i id="seta9" class='fas fa-arrow-down'></i><!-- seta down-->
                        </td>
                    </tr>
                </table>   

                                            <!--  TERCEIRO E QUARTO GATEWAY-->

               
                <table  style="margin-left:300px;position:absolute;left:0px;top:750px;font-size:12px'">
                    <tr>
                        <td>
                        <i style="position: absolute;left:0px;top:0px">Há necessidade de apoio operacional?</i>
                        </td>
                        <td>
                        <img src="../images/gateway.png" width="80" style="position: absolute;left:140px;top:-15px" />
                        </td>
                        <td>
                        <div class="card" style="width: 18rem;position:absolute;left:320px;top:-80px;">
                                <div class="card-header">
                                    Assessoria operacional
                                </div>
                                <div class="card-body text-primary text-center">
                                    <h5 class="card-title">Produzir Análise e informações iniciais</h5>
                                    <p class="card-text"></p>
                                    <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                    Ver mais
                                    </button-->
                                </div>
                        </div>    
                        </td>
                        <td>
                            <img src="../images/setaVdDir.png" width="60" style='position: absolute;left:220px;top:20px;color:#5CB85C'>>
                        </td>
                    </tr>
                    
                </table>   
                <!-- segundo gateway-->
               
                                            <!--GATEWAY --> 

                <table  style="margin-left:300px;position:absolute;left:2px;top:875px;font-size:12px'">
                    <tr>
                        <td>
                        <i style="position:absolute;left:px;top:30px;width:100px;">Sugere-se PAAF?</i>
                        </td>
                        <td>
                             <img src="../images/gateway.png" width="80" style="position:absolute;left:140px;top:0px" />
                        </td>
                        <td>
                        <img src="../images/setaVdDir.png" width="60" style='position: absolute;left:220px;top:25px;color:#5CB85C'>
                        <!--i id="seta43" class='fas fa-arrow-right' style='position: absolute;left:220px;top:25px;color:#5CB85C'></i-->
                        </td>
                        <td>
                                <div class="card " style="width:290px;position: absolute;left:310px;top:-10px;">
                                    <div class="card-header">
                                        Coordenador 
                                    </div>
                                    <div class="card-body text-primary text-center">
                                        <h5 class="card-title">Analisar a possibilidade de instaurar PAAF</h5>
                                        <p class="card-text"></p>
                                        <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                                    </div>
                                </div>
                        </td>
                    </tr>
                    
                </table>   
                
                <table  style="margin-left:300px;position:absolute;left:173px;top:1000px;font-size:12px'">
                    <tr>
                        <td>
                         <!--i id="seta21" class='fas fa-arrow-down' style='position:absolute;left:5px;top:-180px;color: #b85c5c'></i--><!-- seta down-->
                         <img src="../images/setaBaixo.png" width="20" style='position:absolute;left:0px;top:-190px;color: #b85c5c'>
                        </td>
                    </tr>
                </table>   
                <table  style="margin-left:300px;position:absolute;left:173px;top:1150px;font-size:12px'">
                    <tr>
                        <td>
                        <img src="../images/setaBaixo.png" width="20" style="position:absolute;left:0px;top:-190px;color: #b85c5c">
                        </td>
                    </tr>
                </table>   
                <table  style="position:absolute;left:0px;top:1040px;font-size:12px'">
                    <tr>
                        <td>
                            <div class="card -success mb-3" style="width: 18rem; margin-left:300px">
                                <div class="card-header">
                                            Assessoria Jurídica
                                </div>
                                <div class="card-body text-primary text-center">
                                        <h5 class="card-title">Produzir relatório para solicitante</h5>
                                        <p class="card-text"></p>
                                        <img src="../images/relatorio.png" width="80"/>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>   

                
                <table  style="margin-left:300px;position:absolute;left:173px;top:1260px;font-size:12px'">
                    <tr>
                        <td>
                            <img src="../images/setaBaixo.png" width="20" style="position:absolute;left:0px;top:0px;color: #b85c5c">
                        </td>
                    </tr>
                </table>   

                <table  style="margin-left:300px;position:absolute;left:173px;top:1130px;font-size:12px'">
                    <tr>
                        <td>
                             <i class="fas fa-envelope-open fa-2x" style='position: absolute;left:0px;top:200px;font-size:24px'></i>
                             <!--i class="fa fa-circle" aria-hidden="true" style='position: absolute;left:0px;top:200px;font-size:24px;color:#b85c5c'></i-->
                        </td>
                    </tr>
                </table>   

                <table  style="margin-left:300px;position:absolute;left:0px;top:1200px;font-size:12px'">
                    <tr>
                        <td>
                            <i id="seta29" class='fas fa-arrow-down' style='position:absolute;left:435px;top:-200px;color: #5CB85C;'> </i>
                        </td>
                        <td>
                            <i style="position: absolute;left:300px;top:-160px">PAAF recomendado?</i>
                        </td>
                        <td>
                            <img src="../images/gateway.png" width="80" style="position: absolute;left:400px;top:-180px" />
                        </td>
                        <td>
                             <img src="../images/setaVdDir.png" width="60" style='position: absolute;left:480px;top:-145px;color:#5CB85C'/>
                        </td>
                        <td>
                             <i class="fas fa-envelope-open fa-2x"  style='position: absolute;left:550px;top:-150px;down:200px'></i>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;position:absolute;left:320px;top:-80px;">
                                    <div class="card-header">
                                        Assessoria Jurídica
                                    </div>
                                    <div class="card-body text-primary text-center">
                                        <h5 class="card-title">Elaborar PAAF</h5>
                                        <p class="card-text"></p>
                                        <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                        Ver mais
                                        </button-->
                                    </div>
                            </div>    
                        </td>
                        <td>
                        <i id="seta32" class='fas fa-arrow-down' style='position:absolute;left:435px;top:-100px;color: #5CB85C;'> </i>
                        </td>
                    </tr>
                    
                </table>   
            </div>
            
        </div>
        </div>
        <br> <br> <br>
                                                                <!-- MENU  -->

            <div class="col-md-4"></div>
                <div conteiner="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                            include_once("../menu.php");?>
                        </div>
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

    <script src="../js/main.js"></script>
    <script src="../css/main.js"></script>

</body>
</html>