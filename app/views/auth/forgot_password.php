<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>Forgot Password</h2>
    <?php if(isset($message)) echo "<p class='success'>$message</p>"; ?>
    <form method="post" action="forgot-password">
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Reset Password</button>
    </form>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
