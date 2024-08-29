<?php   
session_start();
require_once 'Controller/admin.php';
require_once 'Controller/control.php';
$control = new Control();
$task = isset($_GET['task'])?$_GET['task']:"pageHome";

if(isset($_POST['login'])){
    $control->login();
}elseif(isset($_POST['sign-up'])) $control->signUp();

switch($task){
    case 'pageHome': $control->getPageHome();
    break;
    case 'pageLogin': $control->getPageLogin();
    break;
    case 'pageAdmin': $control->getAdmin();
    break;
    case 'pageUser': $control->getPageUser();
    break;
    case 'pageChitiet': $control->getPageChitiet();
    break;
    case 'pageSignup': $control->getPageSignup();
    break;
    case 'pageFilm': $control->getPageFilm();
    break;
    default:
    $control->getPageHome();
    break;
}
