<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $theme = $_POST['theme'];

    // Set cookie to remember the chosen theme for 1 week (604800 seconds)
    setcookie('selected_theme', $theme, time() + 604800, '/');
    
    header('Location: index.php');
    exit;
}
?>
