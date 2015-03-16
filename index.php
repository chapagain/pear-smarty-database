<?php
require_once('classes/ConnectSmarty.class.php');
require_once ('classes/ConnectMDB2.class.php');

// create an object of the class included above
$smarty = new ConnectSmarty;
$mdb2 = new ConnectMDB2;

// calling the function conMDB2 of ConnectMDB2 class
$connect = $mdb2->conMDB2();

$res = $connect->query("SELECT * FROM basic");
	
$result = array();
	
while($row[] = $res->fetchRow(MDB2_FETCHMODE_ASSOC))
{				
	$result = $row;
}

// checking if there is error while fetching result
// if error has occured then the error message is displayed in 
// a separate template file called error.tpl	
if(PEAR::isError($res))
{
	// get error message
	$error =& $res->getMessage();
	
	// assign error message 
	$smarty->assign('errmessage',$error);
	
	// display the message and exit
	$smarty->display('error.tpl');
	exit();
}	

// asign the content
$smarty->assign('result',$result);

// display the content
$smarty->display('index.tpl');

?>