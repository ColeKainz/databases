<?php
	$query = '';
	if($_POST['devid'] != null){
		$query='UPDATE device SET typid=\'' . $_POST['typid'] . '\' WHERE devid=\'' . $_POST['devid'] . '\'';
		
				$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

				$stid = oci_parse($conn,$query);
				echo oci_execute($stid,OCI_DEFAULT) . 'TEST';
				oci_commit($conn);
				oci_free_statement($stid);
				oci_close($conn);
				header("refresh:0;url=editDelete.php");	
	}else if ($_POST['building'] != null){
				$query='INSERT INTO Location VALUES (' . $_POST['building'] . ',' . $_POST['rack'] . ',' . $_POST['topu'] . ')';

				$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

				$stid = oci_parse($conn,$query);
				echo oci_execute($stid,OCI_DEFAULT) . 'TEST';
				oci_commit($conn);
		
				$query = 'UPDATE device SET racid = \'' . $_POST['rack'] . '\', topid = \'' . $_POST['topu'] . '\' WHERE racid=\'' . $_POST['prevrack'] . '\' AND topid=\'' . $_POST['prevtopu'] . '\'';

				$stid = oci_parse($conn,$query);
				echo oci_execute($stid,OCI_DEFAULT) . 'TEST';
				oci_commit($conn);
				
				$query = 'DELETE FROM location' . ' WHERE rack=\'' . $_POST['prevrack'] . '\'AND topu=\'' . $_POST['prevtopu'] . '\'';

				$stid = oci_parse($conn,$query);
				echo oci_execute($stid,OCI_DEFAULT) . 'TEST';
				oci_commit($conn);
				oci_free_statement($stid);
				oci_close($conn);
				header("refresh:0;url=editDelete.php");
	}


?>
