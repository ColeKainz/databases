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
			  <li><a href="add.php">Ad</a></li>
			</ul> 
		</div>
		<br/>
		<br/>
		<?php
			/*if($_POST['action'] == 'Delete'){
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
			}else if($_POST['action'] == "Edit"){
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
					echo '<input type="submit"/>';
					echo '</form>';
				} else if($_POST['table'] == 'Location'){
					echo '<form method="POST" action="editDelete_submit.php">';
					echo '<table style="width:100%"><tr><td>Building</td><td>Rack</td><td>Unit</td><td>Form</td></tr><tr>';
					echo '<td><input type="text" name="att[]" value=' . $_POST['key'] . ' readonly></td>';
					echo '<td><select name="att[]">      
					  <option value=""></option>                
					  <option value="7615">7615</option>
					  <option value="7625">7625</option>
				  	  </select></td><td><input type="text" name="att[]"></td><td><input type="text" name="att[]"></td><td><select name="att[]">                      
					  <option value=""></option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					  <option value="11">11</option>					  
					  <option value="12">12</option>			  
					  <option value="13">13</option>					  
					  <option value="14">14</option>			  
					  <option value="15">15</option>					  
					  <option value="16">16</option>
					  <option value="17">17</option>
					  <option value="18">18</option>
					  <option value="19">19</option>
					  <option value="20">20</option>
					  <option value="21">21</option>					  
					  <option value="22">22</option>			  
					  <option value="23">23</option>					  
					  <option value="24">24</option>			  
					  <option value="25">25</option>					  
					  <option value="26">26</option>
					  <option value="27">27</option>
					  <option value="28">28</option>
					  <option value="29">29</option>
					  <option value="30">30</option>
					  <option value="31">31</option>					  
					  <option value="32">32</option>			  
					  <option value="33">33</option>					  
					  <option value="34">34</option>			  
					  <option value="35">35</option>					  
					  <option value="36">36</option>
					  <option value="37">37</option>
					  <option value="38">38</option>
					  <option value="39">39</option>
					  <option value="40">40</option>
					  <option value="41">41</option>					  
					  <option value="42">42</option>
				  </select></td><td><input type="text" name="att[]"></td>';
					echo '</tr></table>';
					echo '<input type="submit"/>';
				}	
			}*/
		?>
	</body>
</html>
