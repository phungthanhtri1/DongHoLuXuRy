<?php $res = $conn->query("SELECT * FROM users ORDER BY id DESC"); ?>
<div class="card p-4">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Vai trò</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($u = $res->fetch_assoc()): ?>
                <tr>
                    <td>#<?php echo $u['id']; ?></td>
                    <td class="fw-bold"><?php echo $u['username']; ?></td>
                    <td><?php echo $u['email']; ?></td>
                    <td><?php echo ($u['role'] == 1) ? '<span class="badge bg-primary">Admin</span>' : '<span class="badge bg-secondary">User</span>'; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>