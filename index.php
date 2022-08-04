<?php
include_once("c_programKerja.php");
session_start();
if (
    isset($_SESSION['login_session']) &&
    $_SESSION['login_session'] == 'kadep'
) {
    $controller = new c_programKerja();
    if (!isset($_GET['page'])) {
        $controller->index();
        exit();
    } else {
        $page = $_GET['page'];
    }
    switch ($page) {
        case 'add':
            $controller->add();
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
        case 'post':
            $controller->post($_POST);
            break;
        case 'update':
            $controller->update($_POST);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        case 'Logout':
            $controller->logout();
            break;
    }
} else {
    header("location: v_login.php");
}
