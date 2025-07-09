<?php
session_start();
include '../../includes/header_admin.php';
require_once '../../includes/db.php';
include      '../../model/UserModel.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = trim($_POST['password'] ?? '');
    $name = $_POST['name'] ?? '';
    $role = $_POST['role'] ?? '';
    $user  = find_user_by_email( $pdo, $email );
    
    if( $user ) {
    	$_SESSION['error'] = "Já existe um usuário com este email cadastrado no sistema.";
    	header('Location: ../../view/admin/AddUserView.php');
        exit();
    } else {
    	$password_hash = password_hash($password, PASSWORD_DEFAULT);
    	create_user($pdo, $name, $email, $password_hash, $role);
	$_SESSION['success'] = "Usuário cadastrado com sucesso.";
    	header('Location: ../../view/admin/AddUserView.php');
        exit();
    }
}
