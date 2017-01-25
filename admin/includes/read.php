<?php
// This file will read information from the database.
	
	function getAll($tbl) {
		require_once('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		
		if($runAll) {
			return $runAll;
		}else{
			$error = "There was an error accessing this information.  Please contact Nickleback...";
			return $error;
		}	
	}
	
	function getSingle($tbl,$col,$id) {
		require_once('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		//echo $querySingle;
		$runSingle = mysqli_query($link, $querySingle);
		if($runSingle) {
			return $runSingle;
		}else{
			$error = "There was an error accessing this information.  Please contact Nickleback...";
			return $error;
		}
	}

?>