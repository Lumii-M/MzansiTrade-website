<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<h2>Your Dashboard</h2>
<?php if(!isset($_SESSION['user'])) { echo "<p>Please login.</p>"; include 'includes/footer.php'; exit(); } ?>
<p>Welcome, <?php echo $_SESSION['user']['name']; ?>!</p>
<?php include 'includes/footer.php'; ?>