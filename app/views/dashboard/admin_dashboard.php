<?php include '../app/views/layouts/header.php'; ?>
<div class="container">
    <h2>Admin Dashboard</h2>
    <div class="dashboard-widgets">
        <!-- Example CMS functionality, interactive charts, and tables -->
        <div id="chart-container">
            <canvas id="ticketsChart"></canvas>
        </div>
        <div>
            <h3>Recent Tickets</h3>
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
</div>
<!-- Chart.js integration -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('ticketsChart').getContext('2d');
const chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Open', 'In Progress', 'Closed'],
        datasets: [{
            label: 'Tickets',
            data: [5, 3, 8],
            backgroundColor: ['red', 'yellow', 'green']
        }]
    }
});
</script>
<?php include '../app/views/layouts/footer.php'; ?>
