<!DOCTYPE html>
<?php include("navbar.php"); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>會員登入</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F2E6E6;
            font-family: "微軟正黑體", sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            color: #333;
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
    <h2>會員登入</h2>
    <form action="checkpwd.php" method="post">
        <div class="form-group">
            <label>帳號</label>
            <input type="text" class="form-control" name="account" required>
        </div>
        <div class="form-group">
            <label>密碼</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-custom">登入</button>
    </form>
</div>
</body>
</html>
