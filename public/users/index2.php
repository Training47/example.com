<?php
include '../../core/db_connect.php';

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<div><a href=\"view.php?id={$row['id']}\">"."{$row['first_name']} {$row['first_name']}</a></div>";
}
$content .=<<<EOT
<div class="form-group">
<a href="add.php" class="btn btn-primary">New User</a>
</div>
EOT;

include '../../core/layout.php';