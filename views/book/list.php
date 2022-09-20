<div class="card card-body">
    <h2>Listar Livros</h2>

    <hr>

    <div class="mb-3">
        <a href="/livros/novo" class="btn btn-outline-primary">
            <i class="material-icons">add</i>
            Novo Livro
        </a>
    </div>

    <table class="table table-hover table-striped">
        <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Título</th>
            <th>Categoria</th>
            <th>ISBN</th>
            <th>Idioma</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($books ?? [] as $book) {
            $createdAt = new DateTime($book->getCreatedAt());

            echo "
                    <tr>
                        <td>{$book->getId()}</td>
                        <td>{$book->getTitle()}</td>
                        <td>{$book->getCategory()}</td>
                        <td>{$book->getIsbn()}</td>
                        <td>{$book->getLanguage()}</td>
                        <td>{$createdAt->format('d/m/Y H:i:s')}</td>
                        <td>
                            <a class='btn btn-outline-warning btn-sm' href='/livros/editar?id={$book->getId()}'>Editar</a>
                            <a class='btn btn-outline-danger btn-sm' href='/livros/excluir?id={$book->getId()}'>Excluir</a>
                        </td>
                    </tr>
                ";
        }
        ?>
        </tbody>
    </table>
</div>
