<!DOCTYPE HTML>
<html>

<?php

	$employees[];
	$cpus[];
	$rams[];
	$cards[];
	
	$conn = oci_connect('username', 'password', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
	
	$query = "SELECT  FROM ";

	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	oci_free_statement($stid);	
	oci_close($conn);

	
		<head>

			<script type="text/javascript" src="tabber.js"></script>
			<link rel="stylesheet" href="tab.css" TYPE="text/css" MEDIA="screen">
			<link rel="stylesheet" href="tabnav.css" TYPE="text/css" MEDIA="print">
			<link rel="stylesheet" href="nav-bar.css" TYPE="text/css" MEDIA="screen">
			<script type="text/javascript">

			/* Optional: Temporarily hide the "tabber" class so it does not "flash"
			   on the page as plain HTML. After tabber runs, the class is changed
			   to "tabberlive" and it will appear. */

			document.write('<style type="text/css">.tabber{display:none;}<\/style>');
			</script>
		</head>

		<body>
			<div id="nav-bar">
				<ul>
				  <li><a href="search.html">Surch</a></li>
				  <li><a href="add.html">Ad</a></li>
				</ul> 
			</div>

			<form method="post" action="add_data.php">
				SOOOO, You wish to add a Device?
				<br/><br/>
				Service tag: <input type="text" name="devid"> 
				<br/><br/>
				Employee: 
					<select name="Employees">
						foreach($emp as $employees)
						{
							echo '<option value="' . $emp . '">' . $emp . '</option>';
						}
					</select>
				<br/><br/
				Processor:
					<select name="Processors">
						foreach($cpu as $cpus)
						{
							echo '<option value="' . $cpu . '">' . $cpu . '</option>';
						}
					</select>
				<br/><br/>
				Memory:
					<select name="Memories">
						foreach($ram as $rams)
						{
							echo '<option value="' . $ram . '">' . $ram . '</option>';
						}
					</select>
				<br/><br/>
				Expansion Card:
					<select name="Cards">
						foreach($car as $cards)
						{
							echo '<option value="' . $car . '">' . $car . '</option>';
						}
					</select>
				<br/><br/>
				Location: <input type="text" name="locid">
				<br/><br/>
				Type: <input type="text" name="typid">
				<br/><br/>
				<input type="submit">
			</form>

		</body>

	?>

</html>