<?php

	$

	$conn = oci_connect('username', 'password', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

	$select = 'SELECT ';
	$from = 'FROM ';
	$where = 'WHERE ';

	$from_device = false;
	if(!empty($_POST['devices_check'])) {
	    foreach($_POST['devices_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_device) {
			$from . 'device,';
		    }
	    }
	}

	$from_memory = false;
	if(!empty($_POST['memory_check'])) {
	    foreach($_POST['memory_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_memory) {
			$from . 'memory,';
		    }
	    }
	}

	$from_processor = false;
	if(!empty($_POST['processors_check'])) {
	    foreach($_POST['processors_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_processor) {
			$from . 'processor,';
		    }
	    }
	}

	$from_card = false;
	if(!empty($_POST['cards_check'])) {
	    foreach($_POST['cards_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_memory) {
			$from . 'card,';
		    }
	    }
	}

	$from_employee = false;
	if(!empty($_POST['employees_check'])) {
	    foreach($_POST['employees_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_employee) {
			$from . 'employee,';
		    }
	    }
	}

	$from_manager = false;
	if(!empty($_POST['managers_check'])) {
	    foreach($_POST['managers_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_manager) {
			$from . 'manager,';
		    }
	    }
	}

	$from_project = false;
	if(!empty($_POST['projects_check'])) {
	    foreach($_POST['projects_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_project) {
			$from . 'project,';
		    }
	    }
	}

	$from_location = false;
	if(!empty($_POST['locations_check'])) {
	    foreach($_POST['locations_check'] as $check) {
		    $select . $check . ', '; 
		    if(!$from_location) {
			$from . 'location,';
		    }
	    }
	}

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

		<table style = "width:100%">
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
		   <tr>
		   foreach ($row as $item) 
		   {
		      echo '<td>'$item.'</td>'; 
		   }
		   </tr>
		}
		</table>
		oci_free_statement($stid);
		oci_close($conn);
	</body>
</html>
?>
