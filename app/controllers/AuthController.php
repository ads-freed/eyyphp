<?php
// app/controllers/AuthController.php
require_once '../app/models/User.php';

class AuthController {
    public function login() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = User::findByUsername($username);
            if($user && password_verify($password, $user['password'])){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                header("Location: dashboard");
                exit;
            } else {
                $error = "Invalid credentials";
            }
        }
        include '../app/views/auth/login.php';
    }
    
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'role' => 'customer'
            ];
            $result = User::create($data);
            if($result){
                header("Location: login");
                exit;
            } else {
                $error = "Registration failed";
            }
        }
        include '../app/views/auth/register.php';
    }
    
    public function forgotPassword(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Here you would generate a reset token and email the customer.
            $message = "Password reset instructions sent to your email.";
        }
        include '../app/views/auth/forgot_password.php';
    }
}
?>
