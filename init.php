<?php

spl_autoload_register(function($class){
	include_once realpath(dirname(__FILE__).'/vendor/lib/'.$class.'.php');
}, false);
