<style>
    .card {
        --bs-card-spacer-y:1.25rem;
        --bs-card-spacer-x:1.25rem;
        --bs-card-title-spacer-y:0.5rem;
        --bs-card-border-width:0;
        --bs-card-border-color:transparent;
        --bs-card-border-radius:0.25rem;
        --bs-card-box-shadow: ;
        --bs-card-inner-border-radius:0.25rem;
        --bs-card-cap-padding-y:1rem;
        --bs-card-cap-padding-x:1.25rem;
        --bs-card-cap-bg:#fff;
        --bs-card-cap-color: ;
        --bs-card-height: ;
        --bs-card-color: ;
        --bs-card-bg:#fff;
        --bs-card-img-overlay-padding:1rem;
        --bs-card-group-margin:12px;
        word-wrap:break-word;
        background-clip:border-box;
        background-color:var(--bs-card-bg);
        border:var(--bs-card-border-width) solid var(--bs-card-border-color);
        border-radius:var(--bs-card-border-radius);
        display:flex;
        flex-direction:column;
        height:var(--bs-card-height);
        min-width:0;
        position:relative
    }

    .badge-soft-success {
        background-color: rgba(143, 255, 72, 0.17);
        color: #449744;
    }
    .card {
        box-shadow:0 0 .875rem 0 rgba(41,48,66,.05);
        margin-bottom:24px
    }
    .card-actions a {
        color:#6c757d;
        text-decoration:none
    }
    .card-actions svg {
        height:16px;
        width:16px
    }
    .stat {
        background:#e0eafc;
        border-radius:50%;
        height:48px;
        padding:.75rem;
        width:48px
    }
    .stat i {
        color:#3f80ea!important;
        height:24px;
        width:24px
    }

</style>

<div class="row" style="">
    <div class="col"></div>
    <div class="col">
        <div class="card flex-fill">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Categorias</h5>
                    </div>

                    <div class="col-auto">
                        <div class="stat stat-sm">
                            <i class="material-icons">bookmarks</i>
                        </div>
                    </div>
                </div>
                <span class="h1 d-inline-block mt-1 mb-3"><?=$quantityCategories?></span>

                <hr>
                <div class="mb-0">
                    <span class="badge badge-soft-success me-2"> +100% </span>
                    <span class="text-muted">Desde a última semana</span>
                    <span style="float: right">
                        <a href="/categorias/listar" class="btn btn-link">
                            <i class="material-icons">east</i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card flex-fill">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Livros</h5>
                    </div>

                    <div class="col-auto">
                        <div class="stat stat-sm">
                            <i class="material-icons">menu_book</i>
                        </div>
                    </div>
                </div>
                <span class="h1 d-inline-block mt-1 mb-3"><?=$quantityBooks?></span>

                <hr>
                <div class="mb-0">
                    <span class="badge badge-soft-success me-2"> +100% </span>
                    <span class="text-muted">Desde a última semana</span>
                    <span style="float: right">
                        <a href="/livros/listar" class="btn btn-link">
                            <i class="material-icons">east</i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>