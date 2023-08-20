<!DOCTYPE html>
<html>
<head>
    <title>Theme Selector</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Theme Selector</h1>
        <div id="cookiePopup" class="cookie-popup">
            <div class="cookie-content">
                This website uses cookies to enhance user experience.
                <button id="acceptButton">Accept</button>
            </div>
        </div>
        <form id="themeForm" action="set_theme.php" method="post">
            <label for="theme">Select Theme:</label>
            <select name="theme" id="theme">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
            <button type="submit">Set Theme</button>
        </form>
    </div>
    <script>
        // JavaScript code for handling cookie consent
    </script>
</body>
</html>
