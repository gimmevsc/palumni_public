<?php
function t($name) {
    global $words;
    if(array_key_exists($name,$words)){
        echo $words[$name];
        return;
    }
    echo $name;
}
function tr($name) {
    global $words;
    if(array_key_exists($name,$words)){
    
        return $words[$name];
    }
    return $name;
}
function isLocalhost() {
    // Get server IP and remote IP
    $server_ip = $_SERVER['SERVER_ADDR'];
    $remote_ip = $_SERVER['REMOTE_ADDR'];

    // Common local IP addresses
    $local_ips = ['127.0.0.1', '::1'];

    // Check if the server IP is in the list of local IP addresses
    if (in_array($server_ip, $local_ips) || in_array($remote_ip, $local_ips)) {
        return true;
    }

    return false;
}
function getCurrentUrl() {
    // Check if HTTPS
    if(isLocalhost()) return "localhost".$_SERVER['REQUEST_URI'];

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Get the host
    $host = $_SERVER['HTTP_HOST'];

    // Get the request URI
    $requestUri = $_SERVER['REQUEST_URI'];

    // Combine all parts to form the full URL
    $currentUrl = $protocol . $host . $requestUri;
    return $currentUrl;
}
?>