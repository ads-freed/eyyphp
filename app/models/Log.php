<?php
// app/models/Log.php
require_once '../config/config.php';

class Log {
    public static function addLog($type, $message){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO logs (type, message, created_at) VALUES (?, ?, NOW())");
        return $stmt->execute([$type, $message]);
    }
    
    public static function getLogs($type){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM logs WHERE type = ? ORDER BY created_at DESC");
        $stmt->execute([$type]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
