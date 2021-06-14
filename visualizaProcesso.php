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
    <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="index.php" style="text-decoration: none;"><i class="fa fa-list-alt fa-3x" aria-hidden="true" style="margin-left:-300px;color: #1c1c0c;"></i></a>
                                </div>
                                <div class="col-md-10">
                                <a class="navbar-brand" href="#">
                                    Investigação Cibernética 
                                </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
                            <div class="container">
                                    <div style="margin-left:-100px">
                                    <i class="fas fa-square" style="color: #5CB85C;"></i>  Status atual &nbsp;&nbsp;&nbsp;<i class="fas fa-square" style="color: #b8b85c;"></i> passou aqui
                                    </div>
                            </div>
       </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
            <!-- Operacao Inicial -->
            <div class="col-md-4"></div>
            <div class="col-md-6" style="margin-left:600px">
                <i style='font-size:22px;text-center;margin-left:140px'>Solicitante</i></br>
                <a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#solicitaModal" data-whatever="@getbootstrap">
                <i class='fas fa-bullseye' style='font-size:24px;margin-left:180px'></a></i><br>
                <i id="seta1" class='fas fa-arrow-down' style='font-size:24px;margin-left:180px'></i>
            </div>
    </div>
    <div class="row">
            <!--  -->
            <!-- Analise do coordenador -->
            <div class="col-md-4"></div>
            <div class="col-md-6" style="margin-left:500px">
                <div class="card" style="width: 18rem; margin-left:150px">
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
            </div>
            <div class="col-md-2 align-self-center" style="margin-left:-820px"> 
            <i id="seta2" class='fas fa-arrow-left' style='font-size:24px;color: #5CB85C;'> 1 </i></div>
    </div>
               
    <div class="row align-items-start justify-content-start ">
        <div class="col-md-4"></div>
        <div class="col-md-6">
        <i id="seta3" class='fas fa-arrow-down' style='font-size:24px'></i>
        </div>
    </div>
    <div class="row align-items-center justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
            <!-- É competencia da coeciber-->
            <div class="row align-items-center">
                <div class="col-md-2"> <img src="../images/gateway.png" width="80" style="margin-left:-30px"/></div><!-- Losango-->
                <div class="col-md-2" style="margin-left:-420px">É competencia da coeciber!</div>
                <div class="col-md-2"><i id="seta4" class='fas fa-arrow-right' style='font-size:24px;margin-left:50px;color:#b85c5c'></i></div>
                <div class="col-md-2"><i class="fa fa-circle" aria-hidden="true" style='font-size:24px;margin-left:-120px;color:#b85c5c'></i></div>
                <div class="col-md-2" style="margin-left:-300px">Fim <br>Resposta <br>Demandante</div>
                <div class="col-md-2"></div>
                

            </div>
        </div>
    </div>
        <div class="row align-items-start justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
        <i id="seta5" class='fas fa-arrow-down' style='font-size:24px;color: #5CB85C'></i>
        <i id="seta6" class='fas fa-arrow-up' style='font-size:24px;color: #5CB85C;margin-left:300px'> 1</i>
        </div> 
    </div>
   
    <div class="row align-items-center justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
            <!-- Necessita dados complemetares?-->
            <div class="row align-items-center">
                <div class="col-md-2"> <img src="../images/gateway.png" width="80" style="margin-left:-30px"/></div><!-- Losango-->
                <div class="col-md-2" style="margin-left:-420px">Necessita dados complemetares?</div>
                <div class="col-md-2"><i id="seta7" class='fas fa-arrow-right' style='font-size:24px;margin-left:50px;color:#5CB85C'></i></div>
                <div class="col-md-2">
                    <div class="card bg-warning mb-3" style="width: 18rem;">
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
                
                </div>
                <div class="col-md-2" style="margin-left:-300px"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
        <div class="row align-items-start justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">

        </div> 
    </div>

    <div class="row align-items-start">
            <!-- solicitação de dados complementares -->
            <div class="col-md-2"></div>
            <div class="col-md-6" style="margin-left:300px">
                    <div class="card border-success mb-3" style="width: 18rem;">
                        <div class="card-header">
                            Assessoria jurídica
                        </div>
                        <div class="card-body text-primary text-center">
                            <h5 class="card-title">Fazer análise preliminar</h5>
                            <p class="card-text"></p>
                            <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                        </div>
                    </div>
            </div>
            <div class="col-md-2 align-self-center"> 
            <i id="seta2b" class='fas fa-arrow-left' style='font-size:24px;color: #5CB85C;margin-left:-980px'> 2 </i></div>
            <!-- -->
</div>

<!-- Gateway 3 e 4 -->

    <div class="row align-items-start justify-content-start ">
        <div class="col-md-4"></div>
        <div class="col-md-6">
        <i id="seta9" class='fas fa-arrow-down' style='font-size:24px'></i>
        <i id="seta12" class='fas fa-arrow-up' style='font-size:24px;color: #5CB85C;margin-left:300px'> 2</i>
        </div> 
        <div class="col-md-2"></div>
    </div>
    <div class="row align-items-center justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
            <!-- Necessidade de apoio operacional-->
            <div class="row align-items-center">
                <div class="col-md-2"> <img src="../images/gateway.png" width="80" style="margin-left:-30px"/></div><!-- Losango-->
                <div class="col-md-2" style="margin-left:-420px">Há necessidade <br>de apoio operacional?</div>
                <div class="col-md-2"><i id="seta10" class='fas fa-arrow-right' style='font-size:24px;margin-left:50px;color:#5CB85C'></i></div>
                <div class="col-md-2">
            </div>
                <div class="col-md-2" style="margin-left:-300px">
                <div class="card" style="width: 18rem; margin-left:95px">
                    <div class="card-header">
                        Assessoria operacional
                    </div>
                    <div class="card-body text-primary text-center">
                        <h5 class="card-title">Produzir Análise e informações iniciais</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                        Ver mais
                        </button>
                    </div>
                </div>
                
                </div>
                <div class="col-md-2"></div>
                

            </div>
        </div>
    </div>
        <div class="row align-items-start justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
        <i id="seta11" class='fas fa-arrow-down' style='font-size:24px;color: #b85c5c'></i>
       
        </div> 
    </div>
   
    <div class="row align-items-center justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
            <!-- Necessita dados complemetares?-->
            <div class="row align-items-center">
                <div class="col-md-2"> <img src="../images/gateway.png" width="80" style="margin-left:-30px"/></div><!-- Losango-->
                <div class="col-md-2" style="margin-left:-420px">Sugere-se instaurar PAAF?</div>
                <div class="col-md-2"><i id="seta13" class='fas fa-arrow-right' style='font-size:24px;margin-left:50px;color:#5CB85C'></i></div>
                <div class="col-md-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Coordenador
                        </div>
                        <div class="card-body text-primary text-center">
                            <h5 class="card-title">Analisar Instauração de PAAF</h5>
                            <p class="card-text"></p>
                            <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                        </div>
                    </div>    
                
                </div>
                <div class="col-md-2" style="margin-left:-300px"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="row align-items-start justify-content-start">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <i id="seta14" class='fas fa-arrow-down' style='font-size:24px;color: #b85c5c'></i>
            </div> 
            <div class="col-md-2"></div>
        </div>
    
    <div class="row align-items-center justify-content-start">
        <div class="col-md-2"></div>
        <div class="col-md-6">
                        <div class="card border-success mb-3" style="width: 18rem; margin-left:300px">
                                <div class="card-header">
                                            Assessoria Jurídica
                                </div>
                                <div class="card-body text-primary text-center">
                                    <h5 class="card-title">Produzir relatório</h5>
                                        <p class="card-text"></p>
                                        <img src="../images/relatorio.png" width="80"/>
                                </div>
                            
                        </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row align-items-start justify-content-start">
        <div class="col-md-4"></div>
        <div class="col-md-6">
               
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- fim Gateway 3 e 4 -->


</div>

    <div conteiner="conteiner-fluid" style="margin-left:200px">
        <div class="row">
            <div class="col-md-12">
                <?php include_once("../menu.php");?>
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