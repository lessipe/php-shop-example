<?php
require(__DIR__ . '/lib/init.php');
require(__DIR__ . '/layouts/header.php');

$query = "
SELECT * FROM products LIMIT 10
";

$result = sql_query($query);
?>
