<?php
include 'db.php';
include 'ft.php';
session_start();

if (isset($_SESSION['loginsuccessful'])){}
    else {
        echo "<script>alert('You are not Logged In');window.location.href='login.php';</script>";
        
    }
    
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - MoviesWeb </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- nav -->
<div class="container">
  <img src="img/logo.png" style="height: 100px; width: auto; max-width: 100%">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Hello,<?php echo $_SESSION['user'];?></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registeradmin.php">Registrer Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlist.php">Admin List</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="movielist.php">Movie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="categorylist.php">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genrelist.php">Genre</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navend -->
<!--<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="movielist.php">Movies</a>
  <a href="contact.php">Contact</a>

  <a href="adminlist.php">Admins</a>
  <a href="categorylist.php">Categories</a>
  <a href="genrelist.php">Genre</a>

</div>
-->
