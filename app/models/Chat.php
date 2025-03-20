<?php
// app/models/Chat.php
require_once '../config/config.php';

class Chat {
    public static function create($data){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO chats (ticket_id, user_id, message, created_at) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['ticket_id'], $data['user_id'], $data['message'], $data['created_at']]);
    }
    
    public static function getMessages($ticket_id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT c.*, u.username FROM chats c LEFT JOIN users u ON c.user_id = u.id WHERE ticket_id = ? ORDER BY created_at ASC");
        $stmt->execute([$ticket_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
