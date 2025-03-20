<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2><?php echo $translations['register']; ?></h2>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post" action="register">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Register</button>
    </form>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
