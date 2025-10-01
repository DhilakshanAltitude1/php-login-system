<?php
    session_start();

    // Get the current page filename
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link href="https://fonts.googleapis.com/css?family=roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav>
        <div class="wrapper">
            <a href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
            <ul>
                <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
                <li><a href="discover.php" class="<?= ($currentPage == 'discover.php') ? 'active' : '' ?>">About Us</a></li>
                <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Find Blogs</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php' class='" . ($currentPage == 'profile.php' ? 'active' : '') . "'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                } else {
                    echo "<li><a href='signup.php' class='" . ($currentPage == 'signup.php' ? 'active' : '') . "'>Sign up</a></li>";
                    echo "<li><a href='login.php' class='" . ($currentPage == 'login.php' ? 'active' : '') . "'>Log in</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>

<div class="wrapper">
