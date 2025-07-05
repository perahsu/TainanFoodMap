<!DOCTYPE html>
<?php include("navbar.php"); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>會員中心</title>
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
<?php
include("db.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['account'])) {
    header("Location: login.php"); // 若未登入，導回登入頁
    exit();
}

$account = $_SESSION['account'];
$sql = "SELECT * FROM s112080072 WHERE account='$account'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>歡迎回來，" . $row['name'] . "！</h2><br>";
    echo "<p><strong>帳號：</strong> {$row['account']}</p>";
    echo "<p><strong>姓名：</strong>{$row['name']}</p>";
    echo "<p><strong>性別：</strong>{$row['sex']}</p>";
    echo "<p><strong>生日：</strong>{$row['year']}年{$row['month']}月{$row['day']}日</p>";
    echo "<p><strong>電話：</strong>{$row['telephone']}</p>";
    echo "<p><strong>行動電話：</strong>{$row['cellphone']}</p>";
    echo "<p><strong>地址：</strong>{$row['address']}</p>";
    echo "<p><strong>電子郵件：</strong> <a href='mailto:{$row['email']}'>{$row['email']}</a></p>";
    echo "<p><strong>個人網址：</strong><a href='{$row['url']}' target='_blank'>點我查看</a></p>";
    echo "<p><strong>備註：</strong>{$row['comment']}</p><hr>";

    echo "<a href='modify.php'>✏️ 修改密碼</a><br>";
    echo "<a href='search_pwd.php'>🔍 查詢密碼</a><br>";
    echo "<a href='delete.php'>🗑️ 刪除帳號</a><br>";
} else {
    echo "無法取得會員資料。";
}

$conn->close();
?>
</body>
</html>
