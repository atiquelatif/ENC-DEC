<?php
// Router script for PHP built-in server
// Always route POST requests to index.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/index.php';
    return true;
}

// For GET requests, check if file exists
if (file_exists(__DIR__ . $_SERVER['REQUEST_URI']) && is_file(__DIR__ . $_SERVER['REQUEST_URI'])) {
    return false; // serve the requested resource as-is.
} else {
    require_once __DIR__ . '/index.php';
    return true;
}

