<?php
session_start();
require_once '../includes/header_all.php';
$role = $_SESSION['user_role'];
echo $role;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <div class="container">
        <h2>Página Principal</h2>
        <?php if ($role === 'admin'): ?>
        <a href=admin/AddUserView.php>Adicionar Usuário</a>
        <?php endif; ?>
	<?php if ($role === 'manager'): ?>
        <?php endif; ?>
	<?php if ($role === 'participant'): ?>
        <?php endif; ?>
</body>
</html>

