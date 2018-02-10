<?php 

define ('PATH', mb_substr($_SERVER["SCRIPT_FILENAME"], 0, mb_strrpos($_SERVER["SCRIPT_FILENAME"], "/"))."/");
define ('URL', "http://".$_SERVER['SERVER_NAME']);
session_start();

$action = "index";
if (isset($_GET['action'])) $action = $_GET['action'];

require_once(PATH."/classes/dbClass.php");
DB::init("localhost", "root", "", "rb");

require_once(PATH."/classes/userClass.php");
switch ($action) {
    case "index":
        include(PATH."indexPage.php");
        break;
    case "ajax":
        include(PATH."ajaxPage.php");
        break;
    default:
       include(PATH."404Page.php");
}

//DB::getInstance()->query("SELECT * FROM test");

?>