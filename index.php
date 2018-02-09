<?php 

define ('PATH', mb_substr($_SERVER["SCRIPT_FILENAME"], 0, mb_strrpos($_SERVER["SCRIPT_FILENAME"], "/"))."/");
define ('URL', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$action = "index";
if (isset($_GET['action'])) $action = $_GET['action'];
switch ($action) {
    case "index":
        include(PATH."indexPage.php");
        break;
    default:
       include(PATH."404Page.php");
}

require_once(PATH."/classes/dbClass.php");

DB::init("localhost", "root", "", "rb");

//DB::getInstance()->query("SELECT * FROM test");

?>