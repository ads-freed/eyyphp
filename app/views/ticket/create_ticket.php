<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>Create Ticket</h2>
    <form method="post" action="create-ticket" enctype="multipart/form-data">
        <label>Title:</label>
        <input type="text" name="title" required>
        
        <label>Description:</label>
        <textarea name="description" required></textarea>
        
        <label>Priority:</label>
        <select name="priority">
            <option value="normal">Normal</option>
            <option value="high">High</option>
            <option value="critical">Critical</option>
            <option value="urgent">Urgent</option>
        </select>
        
        <label>Attachment:</label>
        <input type="file" name="attachment">
        
        <button type="submit">Submit Ticket</button>
    </form>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
