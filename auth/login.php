<?php
require_once(__DIR__ . '/../layouts/header.php');

if (isset($_SESSION['USER'])) {
    ?>
    <script>
        document.location.href = '/';
    </script>
    <?php
}

?>
<div class="container">
  <div class="card mt-5">
    <div class="card-body">
      <form method="post" action="/auth/login-proc.php">
        <div class="form-group">
          <label for="user_id">
            아이디
          </label>
          <input class="form-control" id="user_id" name="user_id" type="text">
        </div>
        <div class="form-group">
          <label for="password">
            비밀번호
          </label>
          <input class="form-control" id="password" type="password" name="password">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">
            로그인
          </button>
          <a href="/auth/register.php" class="btn btn-secondary">
            회원가입
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
require('../layouts/footer.php');
