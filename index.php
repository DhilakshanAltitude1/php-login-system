<?php
include_once 'header.php';
?>

    <section class="home-intro">
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] . ", you are logged in!</p>";       
        }
        ?>
        <h1>Welcome to the Login System</h1>
        <p>This is a simple login system built with PHP and MySQL.</p>
        <p>You can sign up, log in, and manage your account.</p>
    </section>

    <section class="index-categories">
        <h2>Some BasicCategories</h2>
        <div class="index-categories-list">
            <div>
                <h3>Fun Stuff</h3>
            </div>
            <div>
                <h3>Serious Stuff</h3>
            </div>
            <div>
                <h3>Exciting Stuff</h3>
            </div>
            <div>
                <h3>Boring Stuff</h3>
            </div> 
        </div>
    </section>
<?php
include_once 'footer.php';
?>