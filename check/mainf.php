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

		echo "This code is available at <a href=\"http://github.com/danielemmettschmidt/interface\">https://github.com/danielemmettschmidt/interface</a>.";

		$fiscal_year_query = "SELECT `fiscal_year` FROM `interface`.`fiscal_years`;";

		$project_query = "SELECT `project` FROM `interface`.`project`;";


	  	echo " <form method=\"post\" action=\"action.php\" target=\"_results\"> <br>";

	  	echo "Enter Passcode: <input name =\"Passcode\" type =\"text\"> </input> ";

	  	echo " <br><br> <input type=\"submit\" value=\"Check EVMs\"> ";

	  	echo " </form>";

		echo "<form action=\"/interface\"> <input type=\"submit\" value=\"Back\" /> </form> ";

	}

}

?>
