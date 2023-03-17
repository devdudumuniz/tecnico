<?php

function ExcluirDados($tabela, $campo, $chave, $sql="") {
    include "conexao.php";
    date_default_timezone_set('America/Sao_Paulo');

    if (empty($sql)) {
       $sql = "delete from "."{$tabela}"." where "."{$campo}"." = "."'{$chave}'";
    }

    mysqli_query($conexao, $sql);
    mysqli_close($conexao);

    $xtabela = TrazNomeArquivo($tabela);

    if (empty($xtabela) == false) {
        $cdusua="99999999999";
        $delog = "Exclusão dos dados da tabela ["."{$xtabela}"."] para a chave ["."{$chave}"."]";
        if (isset($_COOKIE['cdusua'])) {
            $cdusua = $_COOKIE['cdusua'];
        }

        if ($tabela !== "log") {
            GravarLog($cdusua, $delog);       
        }
    }

    return;
}

function ConsultarDados($tabela, $campo, $chave, $sql="") {
    include "conexao.php";
    date_default_timezone_set('America/Sao_Paulo');

    if (empty($sql)) {
        $sql = "select * from "."{$tabela}"." where "."{$campo}"." = "."'{$chave}'";
    }

    $aDados=array();

    $resultado=mysqli_query($conexao, $sql);

    if ($resultado !== false) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $aDados[]=$linha;
        }
    }

    mysqli_close($conexao);
    return ($aDados);
}

function AlterarDados($tabela, $campo, $chave, $dados) {
    include "conexao.php";
    $sql = "UPDATE $tabela SET $dados WHERE $campo = $chave";
    $query = mysqli_query($conexao, $sql);
    return $query;
}


function IncluirDados($tabela, $dados=null, $nomes=null, $sql="") {
    include "conexao.php";
    date_default_timezone_set('America/Sao_Paulo');

    if (empty($sql) == true) {

        $sql="insert into "."{$tabela}"." (";
        $campos="";
        $total=count($nomes)-1;

        for ($i=0 ; $i < count($nomes) ; $i++ ) {

            $campos=$campos.$nomes[$i];
        
            if ($i < $total) {
                $campos=$campos.", ";
            }

        }
        
        $sql=$sql.$campos.") values (";

        $campos="";

        for ($x =0 ; $x < count($dados) ; $x++ ) {

            $campo="'".$dados[$x]."'";
        
            if ($x < $total) {
                $campos=$campos.$campo.", ";
            } Else {
                $campos=$campos.$campo.")";
            }
        }
    }

    $sql=$sql.$campos;

    mysqli_query($conexao, $sql);
    mysqli_close($conexao);

    $xtabela = TrazNomeArquivo($tabela);

    if (empty($xtabela) == false) {
        $cdusua="99999999999";
        $delog = "Inclusão dos dados da tabela ["."{$xtabela}"."] para ["."{$dados[0]}"."]";
        if (isset($_COOKIE['cdusua'])) {
            $cdusua = $_COOKIE['cdusua'];
        }

    
    }

    return;
}



?>