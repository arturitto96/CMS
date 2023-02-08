<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body>

    <nav class="navbar bg-dark navbar-dark navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
        <div class="container">
            <span class="navbar-brand">My blog</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div  class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>

                    <?php if (Auth::isLoggedIn()) : ?>
                        
                    <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>

                    <?php else : ?>
                        
                    <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-container">

        <main>
