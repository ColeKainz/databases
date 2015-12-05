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
			  <li><a href="add.php">Ad</a></li>
			</ul> 
		</div>
		<br/>
		<br/>
		<table style = "width:100%">
<?php

	$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

	$select = 'SELECT ';
	$from = ' FROM ';
	$where = ' WHERE ';

	$from_device = false;
	if(!empty($_POST['devices_check'])) {
	    foreach($_POST['devices_check'] as $check) {
		    $select = $select . $check . ','; 
		    if(!$from_device) {
			$from = $from . 'device,';
			$from_device = true;
		    }
	    }
	}
	$devices_service = $_POST['devices_service'];
	if($devices_service != ""){
		$where = $where . 'device.devid=\'' . $devices_service . '\',';
		if(!$from_device) {
			$from = $from . 'device,';
			$from_device = true;
		}
	}
	$devices_typid = $_POST['devices_typid'];
	if($devices_typid != ""){
		$where = $where . 'device.typid=\'' . $devices_typid . '\',';
		if(!$from_device) {
			$from = $from . 'device,';
			$from_device = true;
		}
	}

	$from_memory = false;
	if(!empty($_POST['memory_check'])) {
	    foreach($_POST['memory_check'] as $check) {
		    $select = $select . $check . ','; 
		    if(!$from_memory) {
			$from = $from . 'memory,';
			$from_memory = true;
		    }
	    }
	}
	$memory_frequency = $_POST['memory_frequency'];
	if($memory_frequency != ""){
		$where = $where . 'memory.frequency=\'' . $memory_frequency . '\',';
		    if(!$from_memory) {
			$from = $from . 'memory,';
			$from_memory = true;
		    }
	}
	$memory_capacity = $_POST['memory_capacity'];
	if($memory_capacity != ""){
		$where = $where . 'memory.capacity=\'' . $memory_capacity . '\',';
		    if(!$from_memory) {
			$from = $from . 'memory,';
			$from_memory = true;
		    }
	}
	$memory_stickcount = $_POST['memory_stickcount'];
	if($memory_stickcount != ""){
		$where = $where . 'memory.stickcount=\'' . $memory_stickcount . '\',';
		    if(!$from_memory) {
			$from = $from . 'memory,';
			$from_memory = true;
		    }
	}

	$from_processor = false;
	if(!empty($_POST['processors_check'])) {
	    foreach($_POST['processors_check'] as $check) {
		    $select = $select . $check . ','; 
		    if(!$from_processor) {
			$from = $from . 'processor,';
			$from_processor = true;
		    }
	    }
	}
	$processors_family = $_POST['processors_family'];
	if($processors_family != ""){
		$where = $where . 'processor.family=\'' . $processors_family . '\',';
		    if(!$from_processor) {
			$from = $from . 'processor,';
			$from_processor = true;
		    }
	}
	$processors_frequency = $_POST['processors_frequency'];
	if($processors_frequency != ""){
		$where = $where . 'processor.frequency=\'' . $processors_frequency . '\',';
		    if(!$from_processor) {
			$from = $from . 'processor,';
			$from_processor = true;
		    }
	}
	$processors_corecount = $_POST['processors_corecount'];
	if($processors_corecount != ""){
		$where = $where . 'processor.corecount=\'' . $processors_corecount . '\',';
		    if(!$from_processor) {
			$from = $from . 'processor,';
			$from_processor = true;
		    }
	}
	$processors_threadcount = $_POST['processors_threadcount'];
	if($processors_threadcount != ""){
		$where = $where . 'processor.threadcount=\'' . $processors_threadcount . '\',';
		    if(!$from_processor) {
			$from = $from . 'processor,';
			$from_processor = true;
		    }
	}

	$from_card = false;
	if(!empty($_POST['cards_check'])) {
	    foreach($_POST['cards_check'] as $check) {
		    $select = $select . $check . ','; 
		    if(!$from_card) {
			$from = $from . 'expansioncard,';
			$from_card = true;
		    }
	    }
	}
	$cards_type = $_POST['cards_type'];
	if($cards_type != ""){
		$where = $where . 'expansioncard.model=\'' . $cards_type . '\',';
		    if(!$from_card) {
			$from = $from . 'expansioncard,';
			$from_card = true;
		    }
	}

	$from_employee = false;
	if(!empty($_POST['employees_check'])) {
	    foreach($_POST['employees_check'] as $check) {
		    $select = $select . $check . ','; 
		    if(!$from_employee) {
			$from = $from . 'employee,';
			$from_employee = true;
		    }
	    }
	}
	$employees_email = $_POST['employees_email'];
	if($employees_email != ""){
		$where = $where . 'employee.email=\'' . $employees_email . '\',';
		    if(!$from_employee) {
			$from = $from . 'employee,';
			$from_employee = true;
		    }
	}

	$from_location = false;
	if(!empty($_POST['locations_check'])) {
	    foreach($_POST['locations_check'] as $check) {
		    $select = $select . $check . ','; 
		    if(!$from_location) {
			$from = $from . 'location,';
			$from_location = true;
		    }
	    }
	}
	$locations_building = $_POST['locations_building'];
	if($locations_building != ""){
		$where = $where . 'location.building=\'' . $locations_building . '\',';
		    if(!$from_location) {
			$from = $from . 'location,';
			$from_location = true;
		    }
	}
	$locations_rack = $_POST['locations_rack'];
	if($locations_rack != ""){
		$where = $where . 'location.rack=\'' . $locations_rack . '\',';
		    if(!$from_location) {
			$from = $from . 'location,';
			$from_location = true;
		    }
	}
	$locations_unit = $_POST['locations_unit'];
	if($locations_unit != ""){
		$where = $where . 'location.topu=\'' . $locations_unit . '\',';
		    if(!$from_location) {
			$from = $from . 'location,';
			$from_location = true;
		    }
	}
	$locations_form = $_POST['locations_form'];
	if($locations_form != ""){
		$where = $where . 'location.form=\'' . $locations_form . '\',';
		    if(!$from_location) {
			$from = $from . 'location,';
			$from_location = true;
		    }
	}

	$select = rtrim($select, ",");

	if($select == "SELECT "){
		$select = $select . "*";
	}

	$from = rtrim($from, ",");
	$where = rtrim($where, ",");

	$query = $select . $from . $where;
	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
		while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
		{
		   echo '<tr>';
		   foreach ($row as $item) 
		   {
		      echo '<td>' . $item . '</td>'; 
		   }
		   echo '</tr>';
		}
		oci_free_statement($stid);
		oci_close($conn);
?>
		</table>
	</body>
</html>
