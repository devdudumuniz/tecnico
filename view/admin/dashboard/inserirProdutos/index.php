<?php
error_reporting(0);
ini_set('display_errors', '0');

include_once "../../../../model/db.php";
$consultaCategoria = ConsultarDados("", "", "", "SELECT * FROM `categoria`");
?>


<div class="row g-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Inserir Produto</h6>
            <form action="valida/inserirProd.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecione a imagem do produto</label>
                    <input name="imagemProd" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Título do Produto</label>
                    <input name="tituloProd" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tamanho Arquivo em GB</label>
                    <input name="tamanhoProd" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea" class="form-label">Descrição</label>
                    <textarea name="descriProd" class="form-control" placeholder="Descrição" id="floatingTextarea" style="height: 150px;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Link de download</label>
                    <input name="linkProd" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea" class="form-label">Instruções de Instalação</label>
                    <textarea name="instruProd" class="form-control" placeholder="Descrição" id="floatingTextarea" style="height: 150px;"></textarea>
                </div>
                <select name="categoriaProd" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Categoria</option>
                    <?php foreach ($consultaCategoria as $categoria) { ?>
                        <option value="<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['nome_categoria'] ?></option>
                    <?php } ?>
                </select>
                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </form>
        </div>
    </div>

</div>