<?php
require_once 'ConnectSmarty.class.php';
require_once 'MDB2.php';
/**
* Database connection class
*/

class ConnectMDB2
{
	/**
	* This function connects to the database
	* @access public
	* @return an object of connection
	* if error exists, then the error message is displayed with the help of smarty in error.tpl file
	*/
	function conMDB2()
	{		
		$mdb2 =& MDB2::connect('mysql://root:@localhost/test');
		if(PEAR::isError($mdb2))
		{
			require_once('classes/ConnectSmarty.class.php');				
			// create an object of the class 
			$smarty = new ConnectSmarty;
			
			// get error message
			$msg = $mdb2->getMessage();
			
			// assign message
			$smarty->assign('errmessage',$msg);
			
			// display and exit
			$smarty->display('error.tpl');
			exit();
		}
		return $mdb2;
	}
}

?>