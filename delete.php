<?php
include("db.php");
?>
<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>刪除帳號</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { background-color: #F2E6E6; font-family: "微軟正黑體", sans-serif; }
        .container {
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            color: #333;
            max-width: 800px;
        }
        h2 { color: #804040; font-weight: bold; }
        .btn-custom { background-color: #CF9E9E; color: white; }
    </style>
</head>
<body>
<div class="container">
    <h2>刪除帳號</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $account = $_POST["account"];
        if (!empty($account)) {
            $sql = "DELETE FROM s112080072 WHERE account='$account'";
	    $conn->query($sql);

	    if ($conn->affected_rows > 0) {
    		echo "<div class='alert alert-success'>帳號 <strong>$account</strong> 已成功刪除。</div>";
	    } else {
   		echo "<div class='alert alert-warning'>帳號 <strong>$account</strong> 不存在，未刪除任何資料。</div>";
	}

        } else {
            echo "<div class='alert alert-warning'>請輸入帳號。</div>";
        }
    }
    ?>

    <form method="post">
        <div class="form-group">
            <label>帳號</label>
            <input type="text" class="form-control" name="account" required>
        </div>
	<button type="submit" class="btn btn-danger" onclick="return confirm('你確定要刪除這個帳號嗎？')">刪除帳號</button>
    </form>
</div>
</body>
</html>
