<?php

	$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
	if(!$conn)
	{
		echo "An error has occurred!";
	}
	$query = "INSERT INTO Location VALUES(" . $_POST['building'] . ", " . $_POST['rack'] . ", " . $_POST['topUnit'] . ");";
	echo $query;
	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	oci_free_statement($stid);	
	oci_close($conn);

	$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
	if(!$conn)
	{
		echo "An error has occurred!";
	}
	$query = "INSERT INTO Device" . " VALUES('" . $_POST['devid'] . "', " . $_POST['Employees'] . ", '" . $_POST['Processors'] . "', '" . $_POST['Memories'] . "', '" . $_POST['Cards'] . "', " . $_POST['rack'] . ", " . $_POST['topUnit'] . ", '" . $_POST['typid'] . "');";
	echo $query;
	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	oci_free_statement($stid);	
	oci_close($conn);

	/*foreach($_POST as $row)
	{
		echo $row . "<br/>";
	}*/

	$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
	$query = 'SELECT * FROM Device WHERE devid = ' . $_POST['devid'] . ');';
	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	while ($row = oci_fetch_array($+stid,OCI_ASSOC)) 
	{
	   foreach ($row as $item) 
	   {
	      echo $item.' '; 
	   }
	   echo '<br/>';
	}
	oci_free_statement($stid);
	oci_close($conn);

	$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
	$query = 'SELECT * FROM Location WHERE rack = ' . $_POST['rack'] . ', topu = ' . $_POST['topUnit'] . ');';
	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);
	while ($row = oci_fetch_array($+stid,OCI_ASSOC)) 
	{
	   foreach ($row as $item) 
	   {
	      echo $item.' '; 
	   }
	   echo '<br/>';
	}
	oci_free_statement($stid);
	oci_close($conn);
?>