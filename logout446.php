<?php
session_start();

class LogoutHandler {
    public function logout() {
        session_unset();
        session_destroy();
        header("Location: preutskel1.php");
        exit();
    }
}

$logoutHandler = new LogoutHandler();
$logoutHandler->logout();
?>
