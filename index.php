<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("Alex/KazikovException.php");
include_once("Alex/Linear.php");
include_once("Alex/Square.php");
include_once("Alex/Log.php");
$arr = [];
$arr[] = readline("a=");
$arr[] = readline("b=");
$arr[] = readline("c=");
try {
	$solver = new Kazikov\Square($arr[0], $arr[1], $arr[2]);
	
	Kazikov\Log::log("Roots: " . implode(", ", $solver->solve($arr[0], $arr[1], $arr[2])));
	
}catch(Kazikov\KazikovException $ex) {
	Kazikov\Log::log($ex->getMessage());
} 
Kazikov\Log::write();
?>
