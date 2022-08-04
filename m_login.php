<?php
session_start();
$registeredKadep = array('kadep' => 'kadep');
$registeredMenteri = array('menteri' => 'menteri');
$nama = $_POST['Username'];
$password = $_POST['Password'];
$level = $_POST['Level'];
if ($level == "1") {
    if (($nama == reset($registeredKadep)) or
        ($password == key($registeredKadep))
    ) {
        $_SESSION['login_session'] = "kadep";
        header("location:index.php");
    } else {
        header("location: v_login.php");
    }
} elseif ($level == "2") {
    if (($nama == reset($registeredKadep)) or
        ($password == key($registeredKadep))
    ) {
        $_SESSION['login_session'] = "menteri";
        header("location:indexNon.php");
    } else {
        header("location: v_login.php");
    }
} else {
    header("location: v_login.php");
}
