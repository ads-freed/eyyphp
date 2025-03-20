<?php
// app/models/Ticket.php
require_once '../config/config.php';

class Ticket {
    public static function create($data){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO tickets (title, description, priority, status, customer_id, attachment, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['title'],
            $data['description'],
            $data['priority'],
            $data['status'],
            $data['customer_id'],
            isset($data['attachment']) ? $data['attachment'] : null,
            $data['created_at']
        ]);
        return $pdo->lastInsertId();
    }
    
    public static function find($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM tickets WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function getAll(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM tickets ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function getByAgent($agent_id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM tickets WHERE agent_id = ? ORDER BY created_at DESC");
        $stmt->execute([$agent_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function getByCustomer($customer_id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM tickets WHERE customer_id = ? ORDER BY created_at DESC");
        $stmt->execute([$customer_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
