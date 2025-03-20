<?php
// public/index.php
session_start();
require_once '../config/config.php';

// Include controllers
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/TicketController.php';
require_once '../app/controllers/ChatController.php';
require_once '../app/controllers/AdminController.php';

// Basic routing (for a real application consider using a proper router)
$url = isset($_GET['url']) ? $_GET['url'] : '';

switch($url) {
    case '':
    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;
    case 'register':
        $controller = new AuthController();
        $controller->register();
        break;
    case 'forgot-password':
        $controller = new AuthController();
        $controller->forgotPassword();
        break;
    case 'dashboard':
        if(isset($_SESSION['user_role'])){
            switch($_SESSION['user_role']){
                case 'admin':
                    $controller = new AdminController();
                    $controller->adminDashboard();
                    break;
                case 'agent':
                    $controller = new AdminController();
                    $controller->agentDashboard();
                    break;
                case 'customer':
                    $controller = new AdminController();
                    $controller->customerDashboard();
                    break;
                default:
                    header("Location: login");
            }
        } else {
            header("Location: login");
        }
        break;
    case 'create-ticket':
        $controller = new TicketController();
        $controller->createTicket();
        break;
    case 'view-ticket':
        $controller = new TicketController();
        $controller->viewTicket();
        break;
    case 'chat':
        $controller = new ChatController();
        $controller->chat();
        break;
    case 'logs':
        $controller = new AdminController();
        $controller->logs();
        break;
    default:
        echo "404 Page Not Found";
}
?>
