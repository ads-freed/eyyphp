<?php
// app/controllers/TicketController.php
require_once '../app/models/Ticket.php';
require_once '../app/models/User.php';

class TicketController {
    public function createTicket(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'title'       => $_POST['title'],
                'description' => $_POST['description'],
                'priority'    => $_POST['priority'],
                'status'      => 'Open',
                'customer_id' => $_SESSION['user_id'],
                'created_at'  => date("Y-m-d H:i:s")
            ];
            // Handle file upload if provided
            if(isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0){
                $target_dir = "../uploads/";
                $filename = time() . '_' . basename($_FILES['attachment']['name']);
                $target_file = $target_dir . $filename;
                if(move_uploaded_file($_FILES['attachment']['tmp_name'], $target_file)){
                    $data['attachment'] = $filename;
                }
            }
            $ticket_id = Ticket::create($data);
            if($ticket_id){
                // (Optionally, send email/notification to admin/agent here.)
                header("Location: view-ticket?id=" . $ticket_id);
                exit;
            }
        }
        include '../app/views/ticket/create_ticket.php';
    }
    
    public function viewTicket(){
        $ticket_id = $_GET['id'];
        $ticket = Ticket::find($ticket_id);
        include '../app/views/ticket/view_ticket.php';
    }
}
?>
