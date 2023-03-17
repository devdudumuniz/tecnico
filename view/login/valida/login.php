<?php
include_once "../../../model/db.php";

// Recebendo os dados do formulário via método POST
$usuario = $_POST['email'];
$senha = $_POST['senha'];

// Consulta ao banco de dados para verificar se usuário e senha estão corretos na primeira tabela
$result = ConsultarDados("", "", "", "SELECT * FROM usuarios WHERE login_usua = '{$usuario}' AND senha_usua = '{$senha}' and status_usua = 1");

if (isset($result) && !empty($result)) {
  // Iniciar a sessão
  session_start();

  // Armazenar as informações do usuário na sessão
  $_SESSION['id_usua'] = $result[0]['id_usua'];
  $_SESSION['nome_usua'] = $result[0]['nome_usua'];

  header("location: ../../admin/dashboard/");
}
 else {
  header("location: ../?v=erro");
}
