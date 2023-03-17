<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['id_usua']) || !isset($_SESSION['nome_usua'])) {
  header("location: ../../login");
  exit;
}

// Recuperar as informações da sessão
$id_usua = $_SESSION['id_usua'];
$nome_usua = $_SESSION['nome_usua'];

include_once "../../../model/db.php";

$consultaUsua = ConsultarDados("", "", "", "SELECT u.*, t.*
FROM usuarios u
INNER JOIN tipo_usua t 
ON u.tipo_usua = t.id_tipo");

$get = $_GET['v'];

if (isset($get)) {
    switch ($get) {
        case "dashboard":
            echo "<script> onload = function(){includePage('../dashboard/todos/index.php');} </script>";
            break;
        case "formata":
            echo "<script> onload = function(){includePage('../dashboard/formata/index.php');} </script>";
            break;
        case "duvidas":
            echo "<script> onload = function(){includePage('../dashboard/programas/index.php');} </script>";
            break;
        case "sobre":
            echo "<script> onload = function(){includePage('../dashboard/servidores/index.php');} </script>";
            break;
        case "servicos":
            echo "<script> onload = function(){includePage('../dashboard/arquivos/index.php');} </script>";
            break;
        case "depoimentos":
            echo "<script> onload = function(){includePage('../dashboard/utilitarios/index.php');} </script>";
            break;
        case "blog":
            echo "<script> onload = function(){includePage('../dashboard/inserirProdutos/index.php');} </script>";
            break;
        case "config":
            echo "<script> onload = function(){includePage('../dashboard/config/index.php');} </script>";
            break;
        default:
            echo "<script> onload = function(){includePage('../dashboard/index/index.php');} </script>";
            break;
        case "erroBlog":
            echo "<script> onload = function(){includePage('../dashboard/blog/index.php');}
            alert('Erro ao atualizar Post');
            </script>";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>DM Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="../assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    #page-top{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      width: 100%;
    }
    #wrapper{
      width: 100%;
    
    }
    #posd{
      
      width:17%;
    }
    #content-wrapper{
      background-color: #fff;
      margin-left:17%;

      width: 83%;
    }
    .card {
      margin: 2% auto;
      height:25rem;
    }
    .card img{
      max-height: 15rem;
    }
    .bodyCard{
      max-height: 10rem;
    }
    .quarto{
      height: 3rem;
    }
   
  </style>
</head>