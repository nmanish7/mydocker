<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>
</head>

<body>

    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <a class='navbar-brand' href='index.php'>CTF</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item active'>
                    <a class='nav-link' href='index.php'>Home <span class='sr-only'>( current )</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='index.php?view=bot.html'>Bot</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='index.php?view=about-us.html'>About Us</a>
                </li>
            </ul>
    </nav>
    <div class='container my-3'>

        <?php

if ( !isset( $_GET[ 'view' ] ) || ( $_GET[ 'view' ] == 'index.php' ) ) {
    echo" <p class='text-center'><b>Welcome to CTF Challenge!</b><br><br>This is me. And your challenge is to find me. 100% success is our security. This Website is super secure. If you attacking on this website then you will suffer some legal consequences. Happy Journey!</br></p>
        <img class='mx-auto d-block' src='https://cdn.pixabay.com/photo/2019/08/29/05/14/hacker-4438137_960_720.png'>";

} else {
    echo '<p>';
    include( '/var/www/html/site/' .$_GET[ 'view' ] );
    // include( '/home/yellow/Desktop/brainware_ctf_dockerize/site/' .$_GET[ 'view' ] );
    echo '</p>';
}

?>

    </div>
</body>

</html>