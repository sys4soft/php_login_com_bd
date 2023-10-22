<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card bg-light p-5 shadow mt-5">
                
                <h3>Login</h3>
                
                <hr>

                <form action="?rota=login_submit" method="post">
                    <div class="mb-3">
                        <label for="text_usuario">Usuário</label>
                        <input type="text" name="text_usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="text_senha">Senha</label>
                        <input type="password" name="text_senha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Entrar" class="btn btn-secondary w-100">
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>