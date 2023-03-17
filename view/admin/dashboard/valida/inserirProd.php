<?php
include_once "../../../../model/conexao.php";

// Verifica se o formulário foi enviado pelo método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores dos campos do formulário
    $titulo = $_POST['tituloProd'];
    $tamanho = $_POST['tamanhoProd'];
    $descricao = $_POST['descriProd'];
    $link = $_POST['linkProd'];
    $instrucoes = $_POST['instruProd'];
    $categoria = $_POST['categoriaProd'];

    // Verifica se foi enviada uma imagem
    if (isset($_FILES['imagemProd']) && $_FILES['imagemProd']['error'] === UPLOAD_ERR_OK) {
        // Define o caminho e o nome do arquivo de destino
        $caminhoDestino = '../../../assets/images/produtos/';
        $nomeArquivo = uniqid() . '_' . $_FILES['imagemProd']['name'];
        $caminhoCompleto = $caminhoDestino . $nomeArquivo;

        // Move o arquivo para o caminho de destino
        if (move_uploaded_file($_FILES['imagemProd']['tmp_name'], $caminhoCompleto)) {
            // Insere os dados do produto no banco de dados
            $sql = "INSERT INTO `produtos`(`titulo_produto`, `image_produto`, `tamanho_produto`, `descript_produtos`, `link_download`, `instala_produto`, `categoria_produto`, `status_produtos`) 
            VALUES ('$titulo', '$nomeArquivo', '$tamanho', '$descricao', '$link', '$instrucoes', $categoria, 1)";
            $enviar = mysqli_query($conexao, $sql);
            if (isset($enviar)) {
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../index.php?erro=erro");
                exit();
            }
        } else {
            echo 'Erro ao mover o arquivo para o destino.';
            header("Location: ../index.php?erro=erro");
        }
    } else {
        echo 'Erro ao fazer upload do arquivo.';
        header("Location: ../index.php?erro=erro");
    }
}
