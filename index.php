<?php
// Check if HTTPS is on or not, then set the URI
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

// Parse the requested URI path
$requestUri = $_SERVER['REQUEST_URI'];

// Define routes for the pages
switch ($requestUri) {
    case '/info-page':
        header('Location: '.$uri.'/dashboard/info-page.html');
        break;

    case '/contact-page':
        header('Location: '.$uri.'/dashboard/contact-page.html');
        break;

    case '/index':
    case '/':
        header('Location: '.$uri.'/dashboard/index.html');
        break;

    default:
        // Redirect to 404 page if route doesn't match
        header('Location: '.$uri.'/dashboard/404.html');
        break;
}

exit;
?>
