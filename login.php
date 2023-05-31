<!DOCTYPE html>
<html>
<body>
	<h2>Đăng nhập</h2>
	<form method="post" action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<br>
		<label for="password">Mật khẩu:</label>
		<input type="password" id="password" name="password" required>
		<br>
		<input type="submit" value="Đăng nhập">
	</form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra tên đăng nhập và mật khẩu
    if ($username === "admin" && $password === "123456") {
        // Đăng nhập thành công, chuyển hướng sang trang chính
        header("Location: index.php");
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo lỗi
        $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>
