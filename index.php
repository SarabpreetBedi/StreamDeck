<?php
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// You can expand the list of supported languages if needed
switch ($language) {
    case "de":
        header("Location: https://streamdeck-52o2.onrender.com/de/", true, 301);
        break;
    case "en":
        header("Location: https://streamdeck-52o2.onrender.com/en/", true, 301);
        break;
    default:
        // Default to English
        header("Location: https://streamdeck-52o2.onrender.com/en/", true, 301);
        break;
}
exit;
?>

