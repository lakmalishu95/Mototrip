// php/protected_page.php
<?php
require 'session.php';

if (!is_logged_in()) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Page - MotoTrip</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>MotoTrip</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Welcome to the protected page!</h2>
            <p>This page is only accessible to logged-in users.</p>
        </div>
    </main>
</body>
</html>
