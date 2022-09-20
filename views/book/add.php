<section class="row mt-5 pt-5 align-items-center" style="width: 80%; margin: auto;">
    <div class="col-6">
        <article class="card card-body pb-5">
            <h3 class="text-center mb-5">- Novo Livro - </h3>
            <form action="" method="post">
                <label for="category">Categoria</label>
                <select id="category" name="category" class="form-select mb-3">
                    <option value="" disabled selected> -- Selecione -- </option>
                    <?php
                        foreach ($categories as $category) {
                            echo "<option value='{$category->getId()}'>{$category->getName()}</option>";
                        }
                    ?>
                </select>

                <label for="title">Titulo</label>
                <input id="title" name="title" placeholder="Titulo do Livro" type="text" class="form-control mb-3">

                <label for="isbn">ISBN</label>
                <input id="isbn" name="isbn" placeholder="ISBN do Livro" type="text" class="form-control mb-3">

                <label for="language">Idioma</label>
                <select id="language" name="language" class="form-select mb-3">
                    <option value="" disabled selected> -- Selecione -- </option>
                    <option>pt-br</option>
                    <option>pt</option>
                    <option>en-us</option>
                    <option>es</option>
                </select>

                <div class="d-grid">
                    <button class="btn btn-primary btn-lg">PRONTO</button>
                </div>
            </form>
        </article>
    </div>
    <div class="col-6 text-center">
        <img src="/img/new-book.svg" width="80%" alt="Novo Livro">
    </div>
</section>