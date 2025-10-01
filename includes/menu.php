<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <div class="list-group">
            <a href="index.php" class="list-group-item list-group-item-action">Página Inicial</a>

            <?php if (isset($_SESSION['login'])): ?>
                <a href="post_formulario.php" class="list-group-item list-group-item-action">Criar Post</a>
                <a href="usuario_formulario.php" class="list-group-item list-group-item-action">Editar Perfil</a>
                <a href="core/usuario_repositorio.php?acao=logout" class="list-group-item list-group-item-action">Logout</a>

                <?php if (isset($_SESSION['login']['usuario']['adm']) && $_SESSION['login']['usuario']['adm'] == 1): ?>
                    <a href="usuarios.php" class="list-group-item list-group-item-action">Lista de Usuários</a>
                <?php endif; ?>
            <?php else: ?>
                <a href="login_formulario.php" class="list-group-item list-group-item-action">Login</a>
            <?php endif; ?>
        </div>
    </div>
</div>