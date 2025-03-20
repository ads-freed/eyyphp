<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>System Logs</h2>
    <div>
        <h3>Email Logs</h3>
        <ul>
            <?php foreach($email_logs as $log): ?>
                <li><?php echo $log['created_at']; ?> - <?php echo $log['message']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <h3>Notification Logs</h3>
        <ul>
            <?php foreach($notification_logs as $log): ?>
                <li><?php echo $log['created_at']; ?> - <?php echo $log['message']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <h3>Error Logs</h3>
        <ul>
            <?php foreach($error_logs as $log): ?>
                <li><?php echo $log['created_at']; ?> - <?php echo $log['message']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <h3>Login Histories</h3>
        <ul>
            <?php foreach($login_histories as $log): ?>
                <li><?php echo $log['created_at']; ?> - <?php echo $log['message']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
