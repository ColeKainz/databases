<?php

	$conn = oci_connect('username', 'password', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

	$insert = 'INSERT INTO Device';
	$value = 'VALUES (';



	$query = $insert . $value . ');';

	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	oci_free_statement($stid);	
	oci_close($conn);

?>