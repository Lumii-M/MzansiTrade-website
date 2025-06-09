<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<h2>Upload Product</h2>
<?php if(!isset($_SESSION['user'])) { echo "<p>Please login.</p>"; include 'includes/footer.php'; exit(); } ?>
<form method="post" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Product Name" class="form-control mb-2" required>
  <input type="number" name="price" placeholder="Price" step="0.01" class="form-control mb-2" required>
  <input type="file" name="image" class="form-control mb-2" required>
  <button type="submit" name="upload" class="btn btn-success">Upload</button>
</form>
<?php
if(isset($_POST['upload'])){
    $image = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $image);
    $stmt = $conn->prepare("INSERT INTO products (name, price, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $_POST['name'], $_POST['price'], $image);
    $stmt->execute();
    echo "<p>Product uploaded.</p>";
}
?>
<?php include 'includes/footer.php'; ?>