
        <!-- Sidebar Start -->
        <div id="posd" class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Informática</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $nome_usua;?></h6>
                        <span><?php echo $consultaUsua[0]['tipo_usua'];?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <p onclick="event.preventDefault(); includePage('todos/index.php');" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</p>
                    <p onclick="event.preventDefault(); includePage('formata/index.php');" class="nav-item nav-link"><i class="material-icons me-2">&#xe8b3;</i>Formatação</p>
                    <p onclick="event.preventDefault(); includePage('programas/index.php');" class="nav-item nav-link"><i class="material-icons me-2">&#xe321;</i></i>Programas</p>
                    <p onclick="event.preventDefault(); includePage('servidores/index.php');" class="nav-item nav-link"><i class="fas fa-server me-2"></i>Servidores</p>
                    <p onclick="event.preventDefault(); includePage('arquivos/index.php');" class="nav-item nav-link"><i class="far fa-file-archive me-2"></i>Arquivos</p>
                    <p onclick="event.preventDefault(); includePage('utilitarios/index.php');" class="nav-item nav-link"><i class="fas fa-tools me-2"></i>Utilitários</p>
                    <p onclick="event.preventDefault(); includePage('./inserirProdutos/index.php');" class="nav-item nav-link"><i class="fas fa-cloud-upload-alt me-2"></i>Inserir Produto</p>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
