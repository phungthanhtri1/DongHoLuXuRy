<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");
?>

<table border="1">
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Sửa</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Xóa</a>
    </td>
</tr>
<?php } ?>
</table>
