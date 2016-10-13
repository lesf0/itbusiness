<?php

define("ROOT",__DIR__);
define("CLASS_DIR", ROOT . '/classes');

// Autoload:

set_include_path(CLASS_DIR.PATH_SEPARATOR.get_include_path());
spl_autoload_extensions('.php');
spl_autoload_register();

// Route:

if(count($_POST)){
	require(ROOT.'/ajax.php');
}else{
	require(ROOT.'/page.php');
}

?>