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

		$select = "SELECT * FROM interface.report;";

		echo " <table style = \" border-style: none \" > <tr> <b> ";

  		echo " <th> Account </th> <th> Fiscal Year </th> <th> Project </th> <th> BAC </th> <th> Percent Complete </th> <th> EVM </th> </b> </tr>";

  		$x = 2; // creates even number iterator

		foreach ($conn->query($select) as $trow)  // begins creating pretty table

  		{  // Array or records stored in $row

    			echo " <tr "; //creates new row

    			if ($x % 2 == 0)  // colors every even row gray

    			{

      				echo " bgcolor=\"#F5F5F5\" ";

    			}

    			echo " >";


			// adds all the data to each row

    			echo " 	<td> $trow[Passcode] </td>
				<td> $trow[fiscal_year] </td>
				<td> $trow[project] </td>
				<td> \$$trow[BAC] </td>
				<td> $trow[percent_complete]% </td>
				<td> \$$trow[EVM] </td>";

    			$x++; // moves to next row iterator

		    	echo " </tr>"; // ends row

  		}

  		echo " </table> "; // ends table

		// back button

		echo "<form action=\"/interface\"> <input type=\"submit\" value=\"Back\" /> </form> ";
		
	}

}

$conn->close();

?>
