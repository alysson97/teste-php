<?php
include('../models/data_request.class.php');


if (!isset($_GET['categoria'])) {
  header('HTTP/1.1 400 Bad Request');
  echo json_encode(['error' => 'nao existe o parametro categoria']);
}

$dataRequest = new DataRequest();
$categoria = $_GET['categoria'];

$responseData = [];

switch ($categoria) {
  case 'Clientes':
    $responseData = $dataRequest->dadosClientes();
    break;
  case 'Fornecedores':
    $responseData = $dataRequest->dadosFornecedores();
    break;
  case 'Usuários':
    $responseData = $dataRequest->dadosUsuarios();
    break;
  default:
    return;
}

header('Content-Type: application/json');
echo json_encode($responseData);




/* function obterClasseLabel($status)
{
  switch ($status) {
    case 'Aprovado':
      return 'label-success';
    case 'Pendente':
      return 'label-info';
    case 'Suspenso':
      return 'label-warning';
    case 'Bloqueado':
      return 'label-danger';
    default:
      return '';
  }
} */
