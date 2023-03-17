<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tecnico');
define('DB_PORT', '3306');

$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if (!$conexao) {
    echo "Problemas para conectar no banco de dados. Se o problema persistir, pedimos desculpas e, por favor, envie um e-mail ou entre em contato conosco pelo contato: (77)9 9192-0364";
    die();
}

mysqli_set_charset($conexao, "utf8mb4");

?>
