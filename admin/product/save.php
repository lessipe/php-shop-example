<?php
require_once __DIR__ . "/../lib/init.php";

$image = $_POST['image'];
$title = $_POST['title'];
$description = $_POST['description'];

$query = "
    INSERT INTO products SET
      image = '$image',
      title = '$title',
      description = '$description'
";

sql_query($query);

?>
<script>
    document.location.href = '/';
</script>
