<!DOCTYPE HTML>
<html>

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
			<?php

				$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');
				if(!$conn)
				{
					echo "An error has occurred!";
				}
				$query = "INSERT INTO Location VALUES(" . $_POST['building'] . ", " . $_POST['rack'] . ", " . $_POST['topUnit'] . ");";
				echo $query;
				$stid = oci_parse($conn,$query);
				oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
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
				oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
				oci_free_statement($stid);	
				oci_close($conn);


				echo "You have just entered:"

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
		</div>
	</body>
</html>
