// php/admin_page.php
<?php
require 'session.php';
require 'permissions.php';

if (!is_logged_in() || !has_permission($_SESSION['user_id'], 'admin')) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - MotoTrip</title>
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
            <h2>Welcome to the admin page!</h2>
            <p>This page is only accessible to users with admin permissions.</p>
        </div>
    </main>
</body>
</html>
