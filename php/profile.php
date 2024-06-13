// php/profile.php
<?php
require 'session.php';
require 'db.php';

if (!is_logged_in()) {
    header('Location: login.html');
    exit();
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$stmt->execute(['id' => $user_id]);
$user = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - MotoTrip</title>
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
            <h2>Your Profile</h2>
            <p>Username: <?= htmlspecialchars($user['username']) ?></p>
            <p>Email: <?= htmlspecialchars($user['email']) ?></p>
        </div>
    </main>
</body>
</html>
