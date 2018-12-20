<?php

function mainf()

{

	include 'connection.php'; // add connection code

	if ($conn->connect_error) 

	{

		die("Connection failed: " . $conn->connect_error);

	} 

	else

	{

		echo "Connected.";

		$fiscal_year_query = "SELECT `fiscal_year` FROM `interface`.`fiscal_years`;";

		$project_query = "SELECT `project` FROM `interface`.`project`;";



	  	echo " <form method=\"post\" action=\"action.php\" target=\"_results\"> <br>";

	  	echo "Enter Passcode: <input name =\"Passcode\" type =\"text\"> </input> ";


	  	echo " <br><br> Fiscal Year: <select name=\"fiscal_year\">"; // list box select command

		foreach ($conn->query($fiscal_year_query) as $row)

		{  // Array or records stored in $row

			echo " <option value=\"$row[fiscal_year]\"> $row[fiscal_year] </option> "; 

	    	/* Option values are added by looping through the array */ 

		}  

	  	echo "</select>";  // ends the input for fiscal year


	  	echo " <br><br> Project: <select name=\"project\">"; // list box select command

		foreach ($conn->query($project_query) as $row)

		{  // Array or records stored in $row

			echo " <option value=\"$row[project]\"> $row[project] </option> "; 

	    	/* Option values are added by looping through the array */ 

		}  

	  	echo "</select>";  // ends the input for project


	  	echo " <br><br> BAC: <input type =\"number\" name=\"bac\" min=\"0\" max=\"9999999999\" step=\".01\"> ";  // input for BAC

	  	echo " <br><br> Complete: <input type =\"number\" name=\"percent\" min=\"0\" max=\"100\" step=\"1\"> % ";  // input for BAC


	  	echo " <br><br> <input type=\"submit\" value=\"Submit\"> ";

	  	echo " </form>";

		echo "<form action=\"/interface/check\"> <input type=\"submit\" value=\"Check Previous Submission\" /> </form> ";

	}

}

?>
