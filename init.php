<?php

spl_autoload_register(function ($ClassName) {
	return require_once("Classes/".$ClassName.".php");
});

print "<br/><br/>";

?>