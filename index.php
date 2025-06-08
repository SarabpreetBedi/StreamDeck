<?php
// Get the user's language preference from the browser's Accept-Language header
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Redirect to the appropriate language page based on the browser language
if ($lang === 'de') {
    header("Location: https://streamdeck-52o2.onrender.com/de/", true, 302);  // 302 for temporary redirection
} else {
    header("Location: https://streamdeck-52o2.onrender.com/en/", true, 302);  // 302 for temporary redirection
}
exit;
?>
