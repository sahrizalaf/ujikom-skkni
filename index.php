<?php
require_once "template/header.php";
require_once "libraries/database.php";
require_once "libraries/modules.php";

if ( isset($_GET['page']) ) {
    $page = $_GET['page'];

    if ( file_exists("views/{$page}.php") ) {
        require_once "views/{$page}.php";
    }
}

require_once "template/footer.php"
?>