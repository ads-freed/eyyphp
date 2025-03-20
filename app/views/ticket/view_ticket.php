<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>Ticket Details</h2>
    <p><strong>Title:</strong> <?php echo $ticket['title']; ?></p>
    <p><strong>Description:</strong> <?php echo $ticket['description']; ?></p>
    <p><strong>Status:</strong> <?php echo $ticket['status']; ?></p>
    <p><strong>Priority:</strong> <?php echo $ticket['priority']; ?></p>
    <p><strong>Created At:</strong> <?php echo $ticket['created_at']; ?></p>
    <?php if(isset($ticket['attachment'])): ?>
        <p><strong>Attachment:</strong> <a href="/uploads/<?php echo $ticket['attachment']; ?>" download>Download</a></p>
    <?php endif; ?>
    
    <!-- Ticket conversation/chat area could be integrated here -->
    <div class="ticket-chat">
        <!-- (For production, integrate chat retrieval and WYSIWYG editor here) -->
    </div>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
