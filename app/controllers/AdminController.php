<?php
// app/controllers/AdminController.php
require_once '../app/models/User.php';
require_once '../app/models/Ticket.php';
require_once '../app/models/Log.php';

class AdminController {
    public function adminDashboard(){
        // Load admin dashboard with CMS functionality, charts, tables, etc.
        $tickets = Ticket::getAll();
        include '../app/views/dashboard/admin_dashboard.php';
    }
    
    public function agentDashboard(){
        // Load agent dashboard with assigned tickets
        $tickets = Ticket::getByAgent($_SESSION['user_id']);
        include '../app/views/dashboard/agent_dashboard.php';
    }
    
    public function customerDashboard(){
        // Load customer dashboard with tickets they submitted
        $tickets = Ticket::getByCustomer($_SESSION['user_id']);
        include '../app/views/dashboard/customer_dashboard.php';
    }
    
    public function logs(){
        // Retrieve various logs (email, notification, error, login histories)
        $email_logs        = Log::getLogs('email');
        $notification_logs = Log::getLogs('notification');
        $error_logs        = Log::getLogs('error');
        $login_histories   = Log::getLogs('login');
        include '../app/views/logs/logs.php';
    }
}
?>
