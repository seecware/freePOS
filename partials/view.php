<?php
function view($name, $data = []) {
    extract($data);
    ob_start();
    require __DIR__ . "/../partials/layout.php";
    return ob_get_clean();
}
