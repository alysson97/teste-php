<?php
include 'layout/cabecalho.php';
include 'layout/menu.php';
//include '../controller/dashboard.php';
include '../models/data_request.class.php';
$dataRequest = new DataRequest();

?> 
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            Widget settings form goes here
          </div>
          <div class="modal-footer">
            <button type="button" class="btn blue">Save changes</button>
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Dashboard <small>tudo que você precisa à um click.</small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="index.php">Home</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="#">Dashboard</a>
          </li>
          <li class="pull-right">
            <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
              <i class="fa fa-calendar"></i>
              <span>
              </span>
              <i class="fa fa-angle-down"></i>
            </div>
          </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue" id="corDoBox1">
          <div class="visual">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <div class="details">
            <div class="number">
              <!-- 1349--><?= $dataRequest->dadosClientes('c') ?>
            </div>
            <div class="desc">
              Clientes
            </div>
          </div>
          <a class="more visualizarLink clienteBox" href="#" id="botaoClientes">
            Visualizar <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="dashboard-stat green" id="corDoBox2">
          <div class="visual">
            <i class="fa fa-group"></i>
          </div>
          <div class="details">
            <div class="number">
              <!-- 549 --><?= $dataRequest->dadosUsuarios('c') ?>
            </div>
            <div class="desc">
              Usuários
            </div>
          </div>
          <a class="more visualizarLink usuarioBox" href="#" id="botaoUsuarios">
            Visualizar <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple" id="corDoBox3">
          <div class="visual">
            <i class="fa fa-globe"></i>
          </div>
          <div class="details">
            <div class="number">
              <!-- 89 --><?= $dataRequest->dadosFornecedores('c') ?>
            </div>
            <div class="desc">
              Fornecedores
            </div>
          </div>
          <a class="more visualizarLink fornecedorBox" href="#" id="botaoFornecedores">
            Visualizar <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>

    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>
    <!--Tabela-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box grey">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-folder-open"></i>Tabela Simples
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#portlet-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dynamic-table">
                <!--tabela dinâmica-->
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Usuario</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>-</td>
                    <td>Clicar</td>
                    <td>em</td>
                    <td>Visualizar</td>
                    <td><span class="label label-sm label-danger">Acima</span></td>
                  </tr>
                  <!-- Dados atualizados dinamicamente -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->


<?php
include 'layout/rodape.php';
