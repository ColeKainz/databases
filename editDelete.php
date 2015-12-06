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
		<div class="tabber">
			     <div class="tabbertab" title="Devices">
				<table style = "width:100%">
					<?php

						$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

						$query = "SELECT * FROM device";
						$stid = oci_parse($conn,$query);
						oci_execute($stid,OCI_DEFAULT);
							while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
							{
							   echo '<tr><form method="POST" action="editDelete_select.php">';
							   echo '<input type="hidden" name="table" value="device">';
							   echo '<td><input type="text" name="key" value="' . 							   array_shift($row) . '" readonly></td>';

;							   foreach ($row as $item) 
							   {
							      echo '<td>' . $item . '</td>'; 
							   }
							   echo '<td><input type="submit" name="action" value="Edit"></td>';
							   echo '<td><input type="submit" name="action" value="Delete"></td>';
							   echo '</form></tr>';
							}
							oci_free_statement($stid);
							oci_close($conn);
					?>
				</table>
			     </div>

			     <div class="tabbertab" title="Memory">
				<table style = "width:100%">
					<?php

						$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

						$query = "SELECT * FROM Memory";
						$stid = oci_parse($conn,$query);
						oci_execute($stid,OCI_DEFAULT);
							while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
							{
							   echo '<tr><form method="POST" action="editDelete_select.php">';
							   echo '<input type="hidden" name="table" value="Memory">';
							   echo '<td><input type="text" name="key" value="' . 							   array_shift($row) . '" readonly></td>';

;							   foreach ($row as $item) 
							   {
							      echo '<td>' . $item . '</td>'; 
							   }
							   echo '<td><input type="submit" name="action" value="Delete"></td>';
							   echo '</form></tr>';
							}
							oci_free_statement($stid);
							oci_close($conn);
					?>
				</table>
			     </div>

	 		     <div class="tabbertab" title="Processors">
				<table style = "width:100%">
					<?php

						$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

						$query = "SELECT * FROM Processor";
						$stid = oci_parse($conn,$query);
						oci_execute($stid,OCI_DEFAULT);
							while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
							{
							   echo '<tr><form method="POST" action="editDelete_select.php">';
							   echo '<input type="hidden" name="table" value="Processor">';
							   echo '<td><input type="text" name="key" value="' . 							   array_shift($row) . '" readonly></td>';

;							   foreach ($row as $item) 
							   {
							      echo '<td>' . $item . '</td>'; 
							   }
							   echo '<td><input type="submit" name="action" value="Delete"></td>';
							   echo '</form></tr>';
							}
							oci_free_statement($stid);
							oci_close($conn);
					?>
				</table>
			     </div>

			     <div class="tabbertab" title="Expansion Cards">
				<table style = "width:100%">
					<?php

						$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

						$query = "SELECT * FROM ExpansionCard";
						$stid = oci_parse($conn,$query);
						oci_execute($stid,OCI_DEFAULT);
							while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
							{
							   echo '<tr><form method="POST" action="editDelete_select.php">';
							   echo '<input type="hidden" name="table" value="ExpansionCard">';
							   echo '<td><input type="text" name="key" value="' . 							   array_shift($row) . '" readonly></td>';

;							   foreach ($row as $item) 
							   {
							      echo '<td>' . $item . '</td>'; 
							   }
							   echo '<td><input type="submit" name="action" value="Delete"></td>';
							   echo '</form></tr>';
							}
							oci_free_statement($stid);
							oci_close($conn);
					?>
				</table>
			     </div>

			     <div class="tabbertab" title="Employees">
				<table style = "width:100%">
					<?php

						$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

						$query = "SELECT * FROM Employee";
						$stid = oci_parse($conn,$query);
						oci_execute($stid,OCI_DEFAULT);
							while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
							{
							   echo '<tr><form method="POST" action="editDelete_select.php">';
							   echo '<input type="hidden" name="table" value="Employee">';
							   echo '<td><input type="text" name="key" value="' . 							   array_shift($row) . '" readonly></td>';

;							   foreach ($row as $item) 
							   {
							      echo '<td>' . $item . '</td>'; 
							   }
							   echo '<td><input type="submit" name="action" value="Delete"></td>';
							   echo '</form></tr>';
							}
							oci_free_statement($stid);
							oci_close($conn);
					?>
				</table>
			     </div>

	 		     <div class="tabbertab" title="Location">
				<table style = "width:100%">
					<?php

						$conn = oci_connect('swam', 'sa7y7awv', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db1.chpc.ndsu.nodak.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

						$query = "SELECT * FROM Location";
						$stid = oci_parse($conn,$query);
						oci_execute($stid,OCI_DEFAULT);
							while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
							{
							   echo '<tr><form method="POST" action="editDelete_select.php">';
							   echo '<input type="hidden" name="table" value="Location">';
							   echo '<td>' . array_shift($row) . '</td>'; 
							   echo '<td><input type="text" name="rack" value="' . array_shift($row) . '" readonly></td>';
							   echo '<td><input type="text" name="topu" value="' . array_shift($row) . '" readonly></td>';
							   echo '<td><input type="submit" name="action" value="Edit"></td>';
							   echo '<td><input type="submit" name="action" value="Delete"></td>';
							   echo '</form></tr>';
							}
							oci_free_statement($stid);
							oci_close($conn);
					?>
				</table>
			     </div>
		</div>
	</body>
</html>

