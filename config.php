<?php
 
/*
    Create constants for frequently used paths.
*/   
defined("VIEW_PATH")
    or define("VIEW_PATH", realpath(dirname(__FILE__) . './resources/view/'));
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>