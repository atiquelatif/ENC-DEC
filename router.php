<?php
// Router script for PHP built-in server
if (file_exists(__DIR__ . $_SERVER['REQUEST_URI'])) {
    return false; // serve the requested resource as-is.
} else {
    require_once __DIR__ . '/index.php';
}

