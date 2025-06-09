<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<h2>Login</h2>
<form method="post">
  <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
  <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
<?php
if(isset($_POST['login'])){
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    if($result && password_verify($_POST['password'], $result['password'])){
        $_SESSION['user'] = $result;
        header("Location: index.php");
    } else {
        echo "<p>Invalid credentials.</p>";
    }
}
?>
<?php include 'includes/footer.php'; ?>