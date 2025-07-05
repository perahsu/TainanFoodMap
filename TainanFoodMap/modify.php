<!DOCTYPE html>
<?php include("navbar.php"); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改密碼</title>
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
<body>
<div class="container">
    <h2>修改密碼</h2>
    <form action="update.php" method="post">
        <div class="form-group">
            <label>帳號</label>
            <input type="text" class="form-control" name="account" required>
        </div>
        <div class="form-group">
            <label>新密碼</label>
            <input type="password" class="form-control" name="new_password" required>
        </div>
        <button type="submit" class="btn btn-custom">修改密碼</button>
    </form>
</div>
</body>
</html>
