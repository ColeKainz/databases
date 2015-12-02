<?php

	$

	$conn = oci_connect('username', 'password', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

	$insert = 'INSERT INTO ';
	$value = 'VALUES (';

	//NEEDS CODE TO ADD THE TABLE AND VALUES TO BE INSERTED INTO THE DATABASE.



	$statement = $insert . $value . ');';

	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);

<!DOCTYPE HTML>
<html>
	<head>

		<script type="text/javascript" src="tabber.js"></script>

		<link rel="stylesheet" href="tab.css" TYPE="text/css" MEDIA="screen">
		<link rel="stylesheet" href="tabnav.css" TYPE="text/css" MEDIA="print">
		<link rel="stylesheet" href="nav-bar.css" TYPE="text/css" MEDIA="screen">
	</head>

	<body>
		<div id="nav-bar">
			<ul>
			  <li><a href="search.html">Surch</a></li>
			  <li><a href="add.html">Ad</a></li>
			</ul> 
		</div>

		Your entry has successfully been added!

		oci_free_statement($stid);
		oci_close($conn);
	</body>
</html>
?>
