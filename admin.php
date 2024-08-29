<?php   
session_start();
require_once 'Controller/admin.php';
$aControl = new Admin();
$task = isset($_GET['task'])?$_GET['task']:"pageAdmin";

if(isset($_POST['add'])) $aControl->addF();
elseif(isset($_POST['update'])){ $aControl->updateF($_SESSION['id']);
    unset($_SESSION['id']);
}

switch($task){
    case 'pageAdmin': $aControl->getPageAdmin();
    break;
    case 'pageLogin': $aControl->getPageLogin();
    break;
    default:
    $aControl->getPageAdmin();
    break;
}
