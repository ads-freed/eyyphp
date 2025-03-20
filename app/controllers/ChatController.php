<?php
// app/controllers/ChatController.php
require_once '../app/models/Chat.php';

class ChatController {
    public function chat(){
        // Process new chat messages
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'ticket_id'  => $_POST['ticket_id'],
                'user_id'    => $_SESSION['user_id'],
                'message'    => $_POST['message'],
                'created_at' => date("Y-m-d H:i:s")
            ];
            Chat::create($data);
        }
        // Retrieve messages if a ticket_id is provided
        $ticket_id = isset($_GET['ticket_id']) ? $_GET['ticket_id'] : null;
        $messages = $ticket_id ? Chat::getMessages($ticket_id) : [];
        include '../app/views/chat/chatbox.php';
    }
}
?>
