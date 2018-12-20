<?php

include 'connection.php';

  // Check connection

if ($conn->connect_error) 

{

	die("Connection failed: " . $conn->connect_error);

}

else

{

	$valuepw = $_POST['Passcode'];

  	$sqlpwcheck = "SELECT `passcode`.`passcode` FROM `interface`.`passcode`;";

	$nopw = 0;

  	foreach ($conn->query($sqlpwcheck) as $prow)

  	{  // Array or records stored in $row

    		if ( $prow[passcode] == $valuepw)

    		{

      			$nopw++;

    		}

  	}  

	if ( $nopw == 0)

  	{

    		die("Bad passcode.");

  	}

	else 

	{

		$value_fiscal_year = $_POST['fiscal_year']; // collects fiscal year
		$value_project = $_POST['project']; // collects project name
		$value_bac_raw = $_POST['bac']; // collects BAC
		$value_bac = ($value_bac_raw * 100); // multiplies BAC by 100 to avoid float issues
		$value_percent = $_POST['percent']; // collects percent complete

		$insert = "INSERT INTO `interface`.`master_table` (`Passcode`, `fiscal_year`, `project`, `BAC`, `percent_complete`) VALUES ( '$valuepw', $value_fiscal_year, '$value_project', $value_bac, $value_percent);";

		if ($conn->query($insert) === TRUE) 

		{

			

		}

		else

		{

			echo "'$valuepw', $value_fiscal_year, '$value_project', $value_bac, $value_percent";

		}

	}

}

$conn->close();

?>
