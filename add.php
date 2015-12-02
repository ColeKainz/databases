<?php

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

			<form method="post" action="add_data.php">
				SOOOO, You wish to add a Device?
				<br/><br/>
				Service tag: Employee: <input type="text" name="devid">
				<br/><br/>
				Employee: <input type="text" name="empid">
				<br/><br/>
				Processor: <input type="text" name="cpuid"> 
				<br/><br/>
				Memory: <input type="text" name="memid">
				<br/><br/>
				Expansion Card: <input type="text" name="carid">
				<br/><br/>
				Location: <input type="text" name="locid">
				<br/><br/>
				Type: <input type="text" name="typid">
				<br/><br/>
				<input type="submit">
			</form>

		</body>
	</html>

?>