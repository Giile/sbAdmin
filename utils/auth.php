<?php

if (isset($_SESSION) == false) {
    session_start();
}

function checklogin() {
    if (isset($_SESSION['usuario_id']) == false) {
        header('Location: ./index.php');
        exit();
    }
}