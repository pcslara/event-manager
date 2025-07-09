<?php 
	session_start();
	include '../../includes/header_admin.php'
	$error = $_SESSION['error'] ?? '';
	$success = $_SESSION['success'] ?? '';
	unset( $_SESSION['error'] );
	unset( $_SESSION['success'] );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Usuário</title>
</head>
<body>
    <div class="container">
        <h2>Adicionar Usuário</h2>
        <?php if ($error): ?>
            <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <?php if ($success): ?>
            <p style="color: green;"><?php echo htmlspecialchars($success); ?></p>
        <?php endif; ?>
        
        <form method="POST" action="../../controller/admin/AddUserController.php">
            <label for="email">Nome</label>
            <input type="input" name="name" required>
            
            <label for="email">E-mail</label>
            <input type="email" name="email" required>

            <label for="password">Senha</label>
            <input type="password" name="password" required>
            
            <label for="role">Role</label>
            <input type="input" name="role" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>

