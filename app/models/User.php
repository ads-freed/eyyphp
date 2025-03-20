<?php
// app/models/User.php
require_once '../config/config.php';

class User {
    public static function findByUsername($username){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function create($data){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role, created_at) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$data['username'], $data['email'], $data['password'], $data['role']]);
    }
}
?>
