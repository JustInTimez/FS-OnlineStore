<?php
include __DIR__ . "/head.php";
include __DIR__ . "/../../model/User.php";

// Check if the user is already logged in, if yes then redirect them to homepage
// if(!isset($_SESSION["LoggedInUser"])){

//     header("Location: ./index.php");
//     exit;
// }

?>

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark p-3 text-center">
        <a class="navbar-brand">*Add Logo Here*</a>
        <button class="navbar-toggler text-center" type="button" data-bs-target="#navCollapse" data-bs-toggle="collapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navCollapse">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lookbook">LookBook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact Us</a>
                </li>
            </ul>

        </div>
        
    </nav>
    <!-- Navbar END -->
</header>