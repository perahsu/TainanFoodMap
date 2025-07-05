<?php include("navbar.php"); ?>

<?php
include("db.php");
session_start();

$account = $_POST['account'];
$password = $_POST['password'];

$sql = "SELECT * FROM s112080072 WHERE account='$account' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["account"] = $account;
    header("Location: main.php");
    exit();
} else {
    echo "<script>alert('登入失敗：帳號或密碼錯誤'); window.history.back();</script>";
}
$conn->close();
?>
