<!-- navbar.php -->
<?php session_start(); ?>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-sm navbar-light custom-nav">

  <div class="collapse navbar-collapse" id="navMenu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index(2).html">首頁</a></li>
      <li class="nav-item"><a class="nav-link" href="food(2).html">美食推薦</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="memberDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          會員專區</a>
        <div class="dropdown-menu" aria-labelledby="memberDropdown">
          <a class="dropdown-item" href="join.php">註冊會員</a>
          <a class="dropdown-item" href="login.php">會員登入</a>
          <a class="dropdown-item" href="search_pwd.php">查詢密碼</a>
          <a class="dropdown-item" href="modify.php">修改密碼</a>
          <a class="dropdown-item" href="delete.php">刪除帳號</a>
          <a class="dropdown-item" href="main.php">會員中心</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
