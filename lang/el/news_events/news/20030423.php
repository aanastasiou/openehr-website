<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - News</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrnews/news1" title="openEHR - News">
	<?php include '../../panel/headpanel.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php $current = 1; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1>News</h1>
			
			<h2>Foundation Establishment</h2>
			<h6>23. April 2003 | from: Thomas Beale</h6>
			
			<br/>
			<p>The openEHR Foundation has been established as a not-for-profit company, limited by guarantee.</p>
						
			<br/>
			<a href="../news">>> Back to News</a>
			
		</div>
			
	</div>
	
	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>