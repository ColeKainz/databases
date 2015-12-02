<?php

	$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

	$query = "INSERT INTO Device" . " VALUES ('" . $_POST['devid'] . "', '" . $_POST['Employees'] . "', '" . $_POST['Processors'] . "', '" . 
		$_POST['Memories'] . "', '" . $_POST['Cards'] . "', '" . $_POST['locid'] . "', '" . $_POST['typid'];

	

	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	oci_free_statement($stid);	
	oci_close($conn);

?>