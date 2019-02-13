<?php
require_once('../layouts/header.php');
?>
<div class="container">
  <div class="card mt-5">
    <div class="card-body">
      <form method="post" action="/auth/register-proc.php">
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
          <label for="name">
            이름
          </label>
          <input class="form-control" id="name" name="name" type="text">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">
            회원가입
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
require('../layouts/footer.php');
