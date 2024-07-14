<?php
require_once "dbkoneksi.php";

$usernameErr = $nameErr = $editError = '';
$username = $name = $role = '';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};

if (isset($_POST['Edit'])) {
    if (empty($_POST['username'])) {
        $usernameErr = 'Username tidak boleh kosong!';
    } else {
        $username = test_input($_POST['username']);
    }
    if (empty($_POST['name'])) {
        $nameErr = 'Nama tidak boleh kosong!';
    } else {
        $name = test_input($_POST['name']);
    }
    if (empty($_POST['role'])) {
        $role = 'user';
    } else {
        $role = test_input($_POST['role']);
    }

    if (!$usernameErr && !$nameErr) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $query = $dbh->query($sql);
        $user = $query->fetchObject();

        if ($user) {
            if ($user->username === $username && $user->username !== $_SESSION['role']) {
                $editError = 'Username Sudah Dipakai';
            }
        }    

        if (!$editErrorr) {
            $sql = "UPDATE user SET username=?, name=?, role=? WHERE id=?";
            $dbh->prepare($sql)->execute([$username, $name, $role, $user->id]);
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header('Location: index.php');
        }
    }
}    