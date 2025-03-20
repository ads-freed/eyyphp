<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>Agent Dashboard</h2>
    <div>
        <h3>Assigned Tickets</h3>
        <table>
            <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tickets as $ticket): ?>
                <tr>
                    <td><?php echo $ticket['id']; ?></td>
                    <td><a href="/view-ticket?id=<?php echo $ticket['id']; ?>"><?php echo $ticket['title']; ?></a></td>
                    <td><?php echo $ticket['status']; ?></td>
                    <td><?php echo $ticket['priority']; ?></td>
                    <td><?php echo $ticket['created_at']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
