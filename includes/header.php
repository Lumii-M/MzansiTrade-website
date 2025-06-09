<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MzansiTrade</title>
    <link rel="stylesheet" href="/ecommerce/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/ecommerce/index.php">
        <img src="/ecommerce/images/logo.png" alt="MzansiTrade" style="height: 30px;"> MzansiTrade
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <?php if(isset($_SESSION['user'])): ?>
            <li class="nav-item"><a class="nav-link" href="/ecommerce/upload.php">Upload Product</a></li>
            <li class="nav-item"><a class="nav-link" href="/ecommerce/dashboard.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/ecommerce/logout.php">Logout</a></li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="/ecommerce/register.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="/ecommerce/login.php">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">