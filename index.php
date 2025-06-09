<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<h2>Latest Products</h2>
<div class="row">
<?php
$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
while($row = $result->fetch_assoc()):
?>
<div class="col-md-3">
    <div class="card">
        <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p class="card-text">R <?php echo $row['price']; ?></p>
        </div>
    </div>
</div>
<?php endwhile; ?>
</div>
<?php include 'includes/footer.php'; ?>