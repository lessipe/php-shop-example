<?php
require_once(__DIR__ . '/../lib/init.php');

$userId = $_POST['user_id'];
$password = $_POST['password'];
$name = $_POST['name'];

$errorMessage = null;

if ($userId === null || $userId === '') {
    $errorMessage = '아이디를 입력해주세요.';
} else if ($password === null || $password === '') {
    $errorMessage = '비밀번호를 입력해주세요.';
} else if ($name === null || $name === '') {
    $errorMessage = '이름을 입력해주세요.';
}

if ($errorMessage !== null) {
    ?>
    <script>
        alert('<?php echo $errorMessage ?>');
        window.history.go(-1);
    </script>
    <?php
} else {
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "
        INSERT INTO `users` SET 
          `user_id` = '$userId',
          `password` = '$password',
          `name` = '$name'
    ";

    sql_query($query);

    ?>
    <script>
        alert('회원가입 완료');
        document.location.href = '/';
    </script>
    <?php
}


