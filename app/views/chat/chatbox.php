<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>Chat</h2>
    <div id="chat-box">
        <?php foreach($messages as $msg): ?>
            <div class="chat-message">
                <strong><?php echo $msg['username']; ?>:</strong>
                <span><?php echo $msg['message']; ?></span>
                <small><?php echo $msg['created_at']; ?></small>
            </div>
        <?php endforeach; ?>
    </div>
    <form method="post" action="chat">
        <input type="hidden" name="ticket_id" value="<?php echo isset($_GET['ticket_id']) ? $_GET['ticket_id'] : 0; ?>">
        <textarea name="message" placeholder="Type your message..." required></textarea>
        <button type="submit">Send</button>
    </form>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
