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
  <link rel="stylesheet" href="/css/jquery.Jcrop.min.css">

  <style>
    a {
      text-decoration: none;
    }
  </style>

  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <script src="http://malsup.github.io/jquery.form.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  <script src="/js/jquery.Jcrop.min.js"></script>
</head>
<body class="bg-grey-lighter">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/admin">관리자</a>

      <div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">
              배너관리
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/product" class="nav-link">
              상품관리
            </a>
          </li>
          <li class="nav-item">
            <a href="/auth/logout.php" class="nav-link">
              로그아웃
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
