<?php
 SESSION_START();

 if(isset($_SESSION['auth']))
 {
    if($_SESSION['auth']!=1)
    {
        header("location:login.php");
    }
 }
 else
 {
    header("location:login.php");
 }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChemManager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        .navbar {
            background-color: #fff !important; 
            border-bottom: 2px solid rgba(0, 123, 255, 0.7) !important; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1) !important; 
        }
        .navbar-brand {
            color: #007bff !important; 
            font-size: 30px !important; 
            font-weight: 700 !important; 
        }
        .navbar-nav .nav-link {
            color: #333 !important; 
            font-size: 15px !important; 
            font-weight: 500 !important; 
            transition: color 0.3s, background-color 0.3s !important;
            padding: 12px 15px !important; 
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #007bff !important; 
            background-color: rgba(0, 123, 255, 0.1) !important; 
            border-radius: 6px !important; 
        }
        .navbar-toggler {
            border-color: #007bff !important; 
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,...") !important; 
        }
        #headerCon{
          max-width: 1200px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container" id="headerCon">
    <a class="navbar-brand" href="landing-admin.php">ChemManager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="">Tab1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Tab2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Tab3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Tab4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Tab5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #dc3545;" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>