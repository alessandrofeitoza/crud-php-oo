    <nav class="navbar bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="/" class="navbar-brand" style="margin-left: 20px;">Biblioteca Virtual</a>
            </div>
    <!--        <a class="navbar-brand" href="/">-->
    <!--            Biblioteca-->
    <!--        </a>-->

            <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons">account_circle</i>
                    Alessandro Feitoza
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><a class="dropdown-item text-danger" href="/logout">Sair</a></li>
                </ul>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Biblioteca Virtual</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
<!--                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link active" aria-current="page" href="#">Home</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="#">Link</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                Dropdown-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                                <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                                <li>-->
<!--                                    <hr class="dropdown-divider">-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->

<!--                    <form class="d-flex mb-3" role="search">-->
<!--                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                        <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--                    </form>-->
                    <div class="list-group">
                        <a href="/" class="list-group-item list-group-item-action" aria-current="true">
                            <i class="material-icons">home</i> Inicio
                        </a>
                        <a href="/categorias/listar" class="list-group-item list-group-item-action">
                            <i class="material-icons">bookmarks</i> Categorias
                        </a>
                        <a href="/livros/listar" class="list-group-item list-group-item-action">
                            <i class="material-icons">menu_book</i> Livros
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div style="margin-top: 70px;"></div>