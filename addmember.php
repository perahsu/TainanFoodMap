<?php
include("db.php");

$account = $_POST["account"];
$password = $_POST["password"];
$confirm = $_POST["confirm_password"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$telephone = $_POST["telephone"];
$cellphone = $_POST["cellphone"];
$address = $_POST["address"];
$email = $_POST["email"];
$url = $_POST["url"];
$comment = $_POST["comment"];

if ($password !== $confirm) {
    echo "<script>alert('密碼不一致，請重新輸入。'); window.history.back();</script>";
    exit();
}

$sql_check = "SELECT * FROM s112080072 WHERE account='$account'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "<script>alert('帳號已存在，請選擇其他帳號。'); window.history.back();</script>";
} else {
    $sql = "INSERT INTO s112080072 (account, password, name, sex, year, month, day, telephone, cellphone, address, email, url, comment) 
            VALUES ('$account', '$password', '$name', '$sex', $year, $month, $day, '$telephone', '$cellphone', '$address', '$email', '$url', '$comment')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('註冊成功🎉'); window.location.href='index(2).html';</script>";
    } else {
        echo "<script>alert('註冊失敗：" . $conn->error . "'); window.history.back();</script>";
    }
}
$conn->close();
?>
