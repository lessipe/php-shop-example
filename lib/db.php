<?php
$link = mysqli_connect('localhost', 'root', '', 'php_shop');

function sql_query($query) {
    global $link;

    return mysqli_query($link, $query);
}

function sql_fetch($result) {
    return mysqli_fetch_object($result);
}
