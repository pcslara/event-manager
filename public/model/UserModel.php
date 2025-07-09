<?php

function find_user_by_email( $pdo, $email ) {
   $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
   $stmt->execute([$email]);
   return $stmt->fetch();
}

function create_user($pdo, $name, $email, $password, $role) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$name, $email, $password, $role]);
}
