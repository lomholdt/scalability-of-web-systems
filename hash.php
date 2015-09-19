<?php 
require_once('/usr/share/php/smarty3/Smarty.class.php');
$smarty = new Smarty;

if(isset($_POST['input'])){
	$input = $_POST['input'];
	$output = [];
	foreach (hash_algos() as $hashFunction) {
		$output[$hashFunction] = hash($hashFunction, $input);
	}
	$smarty->assign('input', $input);
	$smarty->assign('output', $output);
}
	$smarty->display('hash.tpl');
?>
