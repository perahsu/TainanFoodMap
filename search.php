<?php
include("db.php");
?>
<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查詢密碼</title>
    <link rel="stylesheet" href="styles.css"> <!-- 你的自訂 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { background-color: #F2E6E6; font-family: "微軟正黑體", sans-serif; }
        .container {
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            color: #333;
            max-width: 600px;
        }
        h2 { color: #804040; font-weight: bold; margin-bottom: 20px; }
        .btn-custom { background-color: #CF9E9E; color: white; }
    </style>
</head>
<body>
<div class="container">
    <h2>查詢密碼</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $account = $_POST['account'];
        $email = $_POST['email'];

        $sql = "SELECT password FROM s112080072 WHERE account='$account' AND email='$email'";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['password'];
    echo "<script>
        alert('您的密碼是：$password');
        window.location.href = 'login.php';
    </script>";
} else {
    echo "<script>
        alert('查無資料，請確認帳號與信箱');
        window.location.href = 'search_pwd.php';
    </script>";
}

   $conn->close();
}
    ?>

</div>
</body>
</html>
