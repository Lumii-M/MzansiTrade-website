<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<h2>Register</h2>
<form method="post">
  <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
  <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
  <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>
<?php
if(isset($_POST['register'])){
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['name'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT));
    $stmt->execute();
    echo "<p>Registered successfully. <a href='login.php'>Login here</a></p>";
}
?>
<?php include 'includes/footer.php'; ?>