<?php
include("config.php");
session_start();

if (isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
    $cpassword = hash('sha246', $_POST['cpassword']); // Hash the input confirm password using SHA-256

if ($password != $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo"<script>alert('Selamat, registrasi berhasil!')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST["cpassword"] = "";
    } else {
        echo "<script>alert(Woops! Terjadi kesalahan.')</script>";
    }
}else {
    echo "<script>alert(Woops! Wmail Sudah Terdaftar.')</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Mahasiswa Register</title>
</head>
<body>
    <div class ="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $email; ?>" required>
                
            </div>
        </form>
    </div>
    
</body>
</html>