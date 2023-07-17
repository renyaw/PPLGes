<?php
require_once('db_login.php');
$id = $_GET['id'];
if ($id != 'x') {
    echo $id;
} else {
    echo 'Keseluruhan';
}
