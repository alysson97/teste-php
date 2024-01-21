<!--  BEGIN CONTAINER -->
<?php

$menuOptions = [
  'Dashboard',
  'Cadastro' => ['Cliente', 'Fornecedor', 'Usuário'],
  'Relatório' => ['Cliente', 'Faturamento'],
];


$menuOptions['Cadastro'][] = 'Produtos';
$menuOptions['Cadastro'][] = 'Perfil de acesso';
$menuOptions['Relatório'][] = 'Produtos';


function alphaSort($a, $b){
  return strcmp($a, $b);
}


uksort($menuOptions, 'alphaSort');
foreach ($menuOptions as &$subMenu){
  if (is_array($subMenu)) {
    usort($subMenu, 'alphaSort');
  }
}


echo '<!-- BEGIN CONTAINER -->
  <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
      <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">';

foreach ($menuOptions as $key => $value){
  if (is_array($value)) {
    echo '<li class="">
            <a href="javascript:;">
              <i class="fa fa-file-text"></i>
              <span class="title">'.$key.'</span>
              <span class="arrow"></span>
            </a>
            <ul class="sub-menu">';
    foreach ($value as $subItem) {
      echo '<li><a href="#">'.$subItem.'</a></li>';
    }
    echo '</ul></li>';
  } else {
    echo '<li class="">
            <a href="index.php">
              <i class="fa fa-home"></i>
              <span class="title">'.$value.'</span>
              <span class="selected"></span>
            </a>
          </li>';
  }
}

echo '</ul>
      <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN CONTENT -->';
?>