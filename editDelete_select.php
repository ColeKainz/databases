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
		<br/>
		<br/>
		<?php
			$query = "";
			if($_POST['action'] == 'Delete'){
				if($_POST['table'] == 'device'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE devid=' . $_POST['key'];
				} else if($_POST['table'] == 'Processor'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE model=' . $_POST['key'];
				} else if($_POST['table'] == 'Memory'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE memid=' . $_POST['key'];
				} else if($_POST['table'] == 'ExpansionCard'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE model=' . $_POST['key'];
				} else if($_POST['table'] == 'Employee'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE empid=' . $_POST['key'];
				} else if($_POST['table'] == 'Location'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE locid=' . $_POST['key'];
				}
			}else if($POST['action'] == "Edit"){
				if($_POST['table'] == 'device'){
					echo '<form method="POST" action="editDelete_submit.php">';
					echo '<table style="width:100%"><tr><td>DevId</td><td>TypId</td></tr><tr>';
					echo '<td><input type="text" name="att[]" value=' . $_POST['key'] . ' readonly></td>';
					echo '<td><select name="att[]">                      
					  <option value="Server">Server</option>
					  <option value="Enclosure">Enclosure</option>
					  <option value="Switch">Switch</option>
				  	  </select></td>';
					echo '</tr></table>';
					echo '<input type="submit" ';
				} else if($_POST['table'] == 'Processor'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE model=' . $_POST['key'];
				} else if($_POST['table'] == 'Memory'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE memid=' . $_POST['key'];
				} else if($_POST['table'] == 'ExpansionCard'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE model=' . $_POST['key'];
				} else if($_POST['table'] == 'Employee'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE empid=' . $_POST['key'];
				} else if($_POST['table'] == 'Location'){
					$query = 'DELETE FROM ' . $_POST['table'] . ' WHERE locid=' . $_POST['key'];
				}	
			}
	</body>
</html>
