<?php
if(isset($_GET['did']) && $_GET['did']!=""){
	$_SESSION['eladevp']['tempdid']=$_GET['did'];
}
var_dump($_GET);
?>