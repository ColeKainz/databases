<!DOCTYPE HTML>
<html>

<?php

function options($flag)
{
	if($flag == "e")
	{
		$employees = array();
		$employeeids = array();


		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT * FROM  Employee";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);
		$j = 0;
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			$i = 0;
			foreach($row as $item)
			{
				if($i == 0)
				{
					$employeeids[$j] = $item;
					$i = $i + 1;
				}
				elseif($i == 1)
				{
					$employees[$j] = $item . " ";
					$i = $i + 1;
				}
				elseif($i = 2)
				{
					$employees[$j] = $employees[$j] . $item;
					break;
				}
			}

		    $employees[$i] = $row['fname'] . " " . $row['lname'];
		    $employeeids[$i] = $row['empid'];
		    $i = $i + 1;
		}
		oci_free_statement($stid);
		oci_close($conn);


		$elength = count($employees);
		for($a = 0; $a < $elength; $a++)
		{
			//Something wrong with echo statements.
			echo ('<option value="' . $employeeids[$a] . '">' . $employees[$a] . "OOGA BOOGA" . '</option>');
		}
	}
	else if($flag == "p")
	{
		$cpus = array();
		$cpuids = array();


		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT * FROM Processor";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);
		$i = 0;
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
		    $cpus[$i] = $row['1'];
		    $cpuids[$i] = $row['0'];
		    $i = $i + 1;
		}
		oci_free_statement($stid);
		oci_close($conn);


		$clength = count($cpus);
		for($a = 0; $a < $clength; $a++)
		{
			echo ('<option value="' . $cpuids[$a] . '">' . $cpuids[$a] . ' - ' . $cpus[$a] . '</option>');
		}
	}
	else if($flag == "m")
	{

		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT * FROM Memory";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);
		$i = 0;
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			echo ('<option value="' . $row[0] . '">' . $row[2] . "GB - " . $row[1] . "Mhz" . '</option>');
		}
		oci_free_statement($stid);
		oci_close($conn);

	}
	else if($flag == "c")
	{

		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT * FROM Expansioncard";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);

		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			$thing = $row['model'];
		    echo ('<option value="' . $row['model'] . '">' . $thing . 'MAH NIGGA' . '</option>');
		}
		oci_free_statement($stid);
		oci_close($conn);

	}
	else
	{
		echo "An error has occured";
	}
}

?>
		<head>

			<script type="text/javascript" src="tabber.js"></script>
			<link rel="stylesheet" href="tab.css" TYPE="text/css" MEDIA="screen">
			<link rel="stylesheet" href="tabnav.css" TYPE="text/css" MEDIA="print">
			<link rel="stylesheet" href="nav-bar.css" TYPE="text/css" MEDIA="screen">
			<script type="text/javascript">

			/* Optional: Temporarily hide the "tabber" class so it does not "flash"
			   on the page as plain HTML. After tabber runs, the class is changed
			   to "tabberlive" and it will appear. */

			document.write('<style type="text/css">.tabber{display:none;}</style>');
			</script>
		</head>

		<body>
			<div id="nav-bar">
				<ul>
				  <li><a href="search.html">Search</a></li>
				  <li><a href="add.html">Add</a></li>
				</ul> 
			</div>

			<form method="post" action="add_data.php">
				SOOOO, You wish to add a Device?
				<br/><br/>
				Service tag: <input type="text" name="devid"> 
				<br/><br/>
				Employee: 
					<select name="Employees">
						<?php options("e"); ?>
					</select>
				<br/><br/>
				Processor:
					<select name="Processors">
						<?php options("p"); ?>
					</select>
				<br/><br/>
				Memory:
					<select name="Memories">
						<?php options("m"); ?>
					</select>
				<br/><br/>
				Expansion Card:
					<select name="Cards">
						<?php options("c"); ?>
					</select>
				<br/><br/>
				Location: <input type="text" name="locid">
				<br/><br/>
				Type: <input type="text" name="typid">
				<br/><br/>
				<input type="submit">
			</form>

		</body>

</html>