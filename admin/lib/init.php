<?php
require_once __DIR__ . "/../../lib/db.php";

session_start();

if (!isset($_SESSION['USER'])) {
    ?>
    <script>
        alert('로그인해야 접근 가능합니다.');
        document.location.href = '/';
    </script>
    <?php
}
