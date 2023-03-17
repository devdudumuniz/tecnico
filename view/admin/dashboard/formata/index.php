<div class="row">
    <?php
include_once "../../../../model/db.php";
    $produtos = ConsultarDados("", "", "", "SELECT * FROM produtos WHERE categoria_produto IN (1, 3)");
    foreach ($produtos as $produto) { ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="../../assets/images/produtos/<?php echo $produto['image_produto']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produto['titulo_produto']; ?></h5>
                    <p class="card-text"><?php echo $produto['tamanho_produto']; ?>GB</p>
                    <a href="<?php echo $produto['link_download']; ?>" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>