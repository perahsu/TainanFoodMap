<?php
include("db.php");

$account = $_POST['account'];
$new_pwd = $_POST['new_password'];

$sql_check = "SELECT password FROM s112080072 WHERE account='$account'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $old_pwd = $row['password'];

    if ($old_pwd === $new_pwd) {
        // 密碼相同，未修改
        echo "<script>
            alert('新舊密碼不能相同！');
            window.location.href = 'modify.php';
        </script>";
    } else {
        // 密碼不同，執行更新
        $sql_update = "UPDATE s112080072 SET password='$new_pwd' WHERE account='$account'";
        $conn->query($sql_update);

        if ($conn->affected_rows > 0) {
            echo "<script>
                alert('修改成功🎉');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                alert('更新失敗，請稍後再試');
                window.location.href = 'modify.php';
            </script>";
        }
    }

} else {
    // 帳號不存在
    echo "<script>
        alert('查無資料，請確認帳號是否正確');
        window.location.href = 'modify.php';
    </script>";
}

$conn->close();
?>
