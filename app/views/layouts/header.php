<?php
// app/views/layouts/header.php
// Use the $translations array loaded in config for multilingual support.
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo ($lang == 'ja' ? 'rtl' : 'ltr'); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $translations['welcome']; ?> - Ticketing System</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/script.js"></script>
</head>
<body class="light-mode">
    <header>
        <h1>Ticketing System</h1>
        <div class="language-switcher">
            <a href="?lang=en">EN</a> | <a href="?lang=ja">JA</a>
        </div>
        <?php if(isset($_SESSION['user_id'])): ?>
            <nav>
                <a href="/dashboard">Dashboard</a>
                <a href="/create-ticket">Create Ticket</a>
                <a href="/chat">Chat</a>
                <?php if($_SESSION['user_role'] == 'admin'): ?>
                    <a href="/logs">Logs</a>
                <?php endif; ?>
                <a href="/logout">Logout</a>
            </nav>
        <?php endif; ?>
        <div class="notification-bell">
            <!-- Real-time notification icon (updates via JS polling/AJAX) -->
            <span id="notification-count">0</span>
        </div>
    </header>
