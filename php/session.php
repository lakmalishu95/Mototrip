// php/session.php
<?php
session_start();

function is_logged_in() {
    return isset($_SESSION['user_id']);
}
?>
