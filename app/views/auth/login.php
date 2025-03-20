<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2><?php echo $translations['login']; ?></h2>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post" action="login">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <a href="forgot-password">Forgot Password?</a> | <a href="register"><?php echo $translations['register']; ?></a>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
