<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shortDesc = $_POST["short_description"] ?? "";
    echo "AI generated description for: " . htmlspecialchars($shortDesc);
}
?>
