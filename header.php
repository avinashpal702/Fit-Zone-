<?php // Header include – navigation ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FitZone fitness studio with training programs, expert coaches, and a motivating community.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">FitZone</a>
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="programs.php">Programs</a>
                <a class="nav-link" href="trainers.php">Trainers</a>
                <a class="nav-link" href="contact.php">Contact</a>
                <a class="btn btn-primary btn-sm ms-lg-2" href="contact.php">Join Now</a>
            </div>
        </div>
    </div>
</nav>