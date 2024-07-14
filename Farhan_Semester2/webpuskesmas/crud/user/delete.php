<?php

require_once "dbkoneksi.php";

if (isset($_POST['Delete']) && isset($_POST['username']) && $_POST['username'] === $_SESSION['username']) {
    $username = $_SESSION['username'];
    $sql = "DELETE FROM user WHERE username=:username";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

?>
