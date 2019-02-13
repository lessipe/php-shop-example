<?php
require_once(__DIR__ . '/../lib/init.php');

$userId = $_POST['user_id'];
$password = $_POST['password'];

$errorMessage = null;

if ($userId === null || $userId === '') {
    $errorMessage = '아이디를 입력해주세요.';
} else if ($password === null || $password === '') {
    $errorMessage = '비밀번호를 입력해주세요.';
} else {
    $query = "
        SELECT * FROM users WHERE user_id = '$userId'
    ";
    $result = sql_query($query);
    $user = sql_fetch($result);

    if ($user === null) {
        $errorMessage = '아이디가 존재하지 않습니다.';
    } else {
        if (!password_verify($password, $user->password)) {
            $errorMessage = '비밀번호가 맞지 않습니다.';
        } else {
            $_SESSION['USER'] = $user;
        }
    }
}

if ($errorMessage !== null) {
    ?>
    <script>
        alert('<?php echo $errorMessage ?>');
        window.history.go(-1);
    </script>
    <?php
} else {
    ?>
    <script>
        document.location.href = '/';
    </script>
    <?php
}
