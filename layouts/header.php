<?php
require_once(__DIR__ . '/../lib/init.php');
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-grey-lighter">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">쇼핑몰</a>

      <div>
        <ul class="navbar-nav ml-auto">
            <?php
            if (!isset($_SESSION['USER'])) {
            ?>
              <li class="nav-item active">
                <a href="/auth/login.php" class="nav-link">
                  로그인
                </a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a href="/auth/logout.php" class="nav-link">
                  로그아웃
                </a>
              </li>
            <?php
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>
