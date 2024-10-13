<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]); // Sanitize user input
    echo "Hello, " . $name . "!";
}
?>
