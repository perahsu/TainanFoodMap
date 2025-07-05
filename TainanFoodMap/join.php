<!DOCTYPE html>
<?php include("navbar.php"); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title><b>註冊會員</b></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F2E6E6;
            font-family: "微軟正黑體", sans-serif;
        }
        .container {
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            color: #333;
            max-width: 800px;
        }
        h2 {
            color: #804040;
            font-weight: bold;
        }
        .btn-custom {
            background-color: #CF9E9E;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>註冊會員</h2>
    <form action="addmember.php" method="post">
        <div class="form-group"><label>帳號</label><input type="text" class="form-control" name="account" required></div>
        <div class="form-group"><label>密碼</label><input type="password" class="form-control" name="password" required></div>
        <div class="form-group"><label>再次輸入密碼</label><input type="password" class="form-control" name="confirm_password" required></div>
        <div class="form-group"><label>姓名</label><input type="text" class="form-control" name="name" required></div>
        <div class="form-group"><label>性別</label>
            <select class="form-control" name="sex" required>
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col"><label>出生年</label><input type="number" class="form-control" name="year" required></div>
            <div class="form-group col"><label>月</label><input type="number" class="form-control" name="month" required></div>
            <div class="form-group col"><label>日</label><input type="number" class="form-control" name="day" required></div>
        </div>
        <div class="form-group"><label>電話</label><input type="text" class="form-control" name="telephone"></div>
        <div class="form-group"><label>行動電話</label><input type="text" class="form-control" name="cellphone"></div>
        <div class="form-group"><label>地址</label><input type="text" class="form-control" name="address"></div>
        <div class="form-group"><label>電子郵件</label><input type="email" class="form-control" name="email"></div>
        <div class="form-group"><label>個人網址</label><input type="url" class="form-control" name="url"></div>
        <div class="form-group"><label>備註</label><textarea class="form-control" name="comment" rows="3"></textarea></div>
        <button type="submit" class="btn btn-custom">加入會員</button>
    </form>
</div>
</body>
</html>
