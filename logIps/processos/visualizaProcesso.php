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

<p style="margin-left:300px"><a href="index.php"><img src="../images/voltar.png" width="40" ></a></p>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"  style="width:1024px; margin-top: -0.25rem !important;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova Solicitação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Dr. Carlos</h4>
            <p>Durante investigação no PIC 7899u807897, oncluso o "Despacho 064.3 - PAAF 0024.19.003658-2" para vossa avaliação.
            PAAF 0024.19.003658-2 SEI 19.16.2187.0012740/2020-54<hr>
            <p class="mb-0">As diligências foram requeridas pelo Ministério Público do Estado de Minas Gerais e referem-se na quebra do sigilo e o monitoramento contínuo de comunicações telefônicas. A Ordem Judicial foi expedida pelo Doutor </p>
      </div>

      <div>


gsdfgsdfgsd





      </div>

        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Análise inicial:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Orientações:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>












      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salvar</button>
        <button type="button" class="btn btn-primary">Encaminhar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fim modal -->
    <div class="row" style="margin-left:200px" >
            <div class="col-md-12" style="margin-left: 200";>   
                <div class="container-fluid">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container" style="margin-left:200px">
                            <a class="navbar-brand" href="#">
                                Investigação Cibernética 
                            </a>
                        </div>
                    </nav>
                
                </div>
                </div>
            </div>
            <!-- Operacao Iniciaç -->
            <div class="col-md-4"></div>
                <div class="col-md-6" style="margin-left:600px">
                <i style='font-size:22px;text-center;margin-left:140px'>Solicitante</i></br>
                <a href="#" style="text-decoration: none;">
                <i class='fas fa-bullseye' style='font-size:24px;margin-left:180px'></a></i><br>
                <i class='fas fa-arrow-down' style='font-size:24px;margin-left:180px'></i>
            </div>


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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ver mais</button>
                    </div>
                </div>
                <i class='fas fa-arrow-down' style='margin-left:150px;font-size:24px'></i>
                <i class='fas fa-arrow-up' style='margin-left:15px;font-size:24px'></i>
                <i class='fas fa-arrow-down' style='margin-left:250px;font-size:24px'></i>
            </div>


            <!-- solicitação de dados complementares -->
            <!--  -->
        
            <div class="col-md-4"></div>
            <div class="col-md-8" style="margin-left:300px">
                <div class="card-group">
                    <div class="card bg-warning mb-3" style="width: 18rem;">
                        <div class="card-header">
                            Solicitante
                        </div>
                            <div class="card-body text-primary text-center">
                                <h5 class="card-title">Fornecer dados Complementares</h5>
                                <p class="card-text"></p>
                                <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                            </div>
                        </div>
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
            </div>
            <!-- -->

            <div class="col-md-4"></div>
            <i class='fas fa-arrow-down' style='margin-left:900px;font-size:24px'></i>
                <i class='fas fa-arrow-up' style='margin-left:1000px;font-size:24px'></i>
            <div class="col-md-8" style="margin-left:650px">
               
                <div class="card border-success mb-3"" style="width: 18rem; margin-left:150px">
                        <div class="card-header">
                            Operações
                        </div>
                        <div class="card-body text-primary text-center">
                                <h5 class="card-title">Produzir análise e informações iniciais</h5>
                                <p class="card-text"></p>
                                <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                            </div>
                </div>
            </div>
           <!--  -->
           <i class='fas fa-arrow-down' style='margin-left:930px;font-size:24px'></i>
            <img src="../images/gateway.png" width="80" style="margin-left:900px"/>
            <i class='fas fa-arrow-down' style='margin-left:900px;font-size:24px'></i>
            <i class='fas fa-arrow-down' style='margin-left:1000px;px;font-size:24px'></i>

            <div class="col-md-2"></div>
            <div class="col-md-10">

                 <div class="card-group" style="margin-left:600px">
                    <div class="card border-success mb-3" style="width: 18rem;">
                            <div class="card-header">
                                        Coordenador
                            </div>
                            <div class="card-body text-primary text-center">
                                <h5 class="card-title">Produzir relatório</h5>
                                    <p class="card-text"></p>
                                    <img src="../images/relatorio.png" width="80"/>
                            </div>
                        
                    </div>
                    <div class="card border-success mb-3" style="width: 18rem;">
                            <div class="card-header">
                                        Coordenador
                            </div>
                            <div class="card-body text-primary text-center">
                                <h5 class="card-title">Analisar e recomendar PAAF</h5>
                                    <p class="card-text"></p>
                                    <!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
                            </div>
                        
                    </div>
                
            
                </div>
            </div>
<!--  -->



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