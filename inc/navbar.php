<nav class="container mt-5 p-4 border rounded-3 shadow-sm bg-light">
    <div class="row align-items-center">
        <div class="col">
            <h4>Aplicação PHP</h4>
        </div>

        <div class="col text-center">
            <a href="?rota=home">Home</a>
            <span class="mx-2">|</span>
            <a href="?rota=page1">Page 1</a>
            <span class="mx-2">|</span>
            <a href="?rota=page2">Page 2</a>
            <span class="mx-2">|</span>
            <a href="?rota=page3">Page 3</a>
        </div>

        <div class="col text-end">
            <span>Usuário logado: <strong><?= $_SESSION['usuario']->usuario ?></strong></span>
            <span class="mx-2">|</span>
            <a href="?rota=logout">Sair</a>
        </div>
    </div>
</nav>