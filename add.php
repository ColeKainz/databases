<!DOCTYPE HTML>
<html>

<?php

function options($flag)
{
	if($flag == "e")
	{
		$es = array();
		$eids = array();


		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT empid, fname, lname FROM  Employee";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);
		$i = 0;
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			$j = 0;
			foreach($row as $item)
			{
				if($j == 0)
				{
					$eids[$i] = $item;
					$j++;
				}
				elseif($j == 1)
				{
					$es[$i] = $item . " ";
					$j++;
				}
				elseif($j = 2)
				{
					$es[$i] = $es[$i] . $item;
				}
			}
			$i++;
		}

		oci_free_statement($stid);
		oci_close($conn);

		$elength = count($es);
		for($a = 0; $a < $elength; $a++)
		{
			echo ('<option value="' . $eids[$a] . '">' . $es[$a] . '</option>');
		}

	}
	else if($flag == "p")
	{
		$ps = array();
		$pids = array();


		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT model, family FROM  Processor";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);
		$i = 0;
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			$j = 0;
			foreach($row as $item)
			{
				if($j == 0)
				{
					$pids[$i] = $item;
					$ps[$i] = " - " . $item;
					$j++;
				}
				elseif($j = 1)
				{
					$ps[$i] = $item . $ps[$i];
					break 1;
				}
			}
			$i++;
		}

		oci_free_statement($stid);
		oci_close($conn);


		$plength = count($ps);
		for($a = 0; $a < $plength; $a++)
		{
			echo ('<option value="' . $pids[$a] . '">' . $ps[$a] . '</option>');
		}
	}
	else if($flag == "m")
	{
		$ms = array();
		$mids = array();

		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT memid, frequency, capacity FROM Memory";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);
		$i = 0;
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			$j = 0;
			foreach($row as $item)
			{
				if($j == 0)
				{
					$mids[$i] = $item;
					$j++;
				}
				elseif($j == 1)
				{
					$ms[$i] = $item . "MHz";
					$j++;
				}
				elseif($j == 2)
				{
					$ms[$i] = $item . "GB - " . $ms[$i];
					break 1;
				}
			}
			$i++;
		}
		$mlength = count($ms);
		for($a = 0; $a < $mlength; $a++)
		{
			echo ('<option value="' . $mids[$a] . '">' . $ms[$a] . '</option>');
		}
			

		oci_free_statement($stid);
		oci_close($conn);

	}
	else if($flag == "c")
	{

		$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
		$query = "SELECT model FROM Expansioncard";
		$stid = oci_parse($conn,$query);
		oci_execute($stid,OCI_DEFAULT);

		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
			foreach($row as $item)
			{
				echo ('<option value="' . $item . '">' . $item . '</option>');
			}
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
				  <li><a href="add.php">Add</a></li>
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
				Building:
					<select name="building">
						<option value="7615">7615</option>
						<option value="7625">7625</option>
					</select>
				<br/><br/>
				Rack: <input type="text" name="rack">
				<br/><br/>
				Top Unit: <input type="text" name="topUnit">
				<br/><br/>
				Type:
					<select name="typid">
						<option value="Server">Server</option>
						<option value="Enclosure">Enclosure</option>
						<option value="Switch">Switch</option>
					</select>
				<br/><br/>
				<input type="submit">
			</form>

		</body>

</html> 
