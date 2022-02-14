<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <script src="main.js"></script>
    <title><?php echo $SITENAME; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
    <a class="navbar-brand text-light bg-dark" href="">Company logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link text-light bg-dark" href="../Main/Home" onclick="clickHome()">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light bg-dark" href="../Main/Timeline" onclick="clickTimeline()">Timeline</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light bg-dark" href="../Contact/About" onclick="clickAbout()">About the project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light bg-dark" href="../Contact/Contactus" onclick="clickContact()">Contact Us</a>
        </li>
        </ul>
    </div>
</nav>
    
