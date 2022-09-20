<div class="card card-body">
    <h2>Listar Categorias</h2>

    <hr>

    <div class="mb-3">
        <a href="/categorias/nova" class="btn btn-outline-primary">
            <i class="material-icons">add</i>
            Nova Categoria
        </a>
    </div>

    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($categories ?? [] as $category) {
                    echo "
                        <tr>
                            <td>{$category->getId()}</td>
                            <td>{$category->getName()}</td>
                            <td>
                                <a class='btn btn-outline-warning btn-sm' href='/categorias/editar?id={$category->getId()}'>Editar</a>
                                <a class='btn btn-outline-danger btn-sm' href='/categorias/excluir?id={$category->getId()}'>Excluir</a>
                            </td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>