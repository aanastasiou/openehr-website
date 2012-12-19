<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Foundation</title>
	<link rel="bookmark" href="http://www.openehr.org/about/foundation" title="openEHR - Foundation">
	<?php include '../panel/headpanel.php' ?>
	
</head>



<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Foundation</h1>
			
			<h2><a name="status"></a>Legal Status</h2>
			<p>The openEHR Foundation is currently a not-for-profit company, limited by guarantee. Its founders were University College London, UK and Ocean Informatics Pty Ltd, Australia. It is regulated under the UK Companies Acts 1985 and 1989. The name 'openEHR' has been registered internationally as a Trade Mark.</p>
			<p>As part of the new governance, the Foundation will be recreated as a new not-for-profit company, possibly in the form of a <a href="http://en.wikipedia.org/wiki/Community_Interest_Company">UK Community Interest Company</a>, or else in the form of a Private company limited by guarantee (the same as the current form), commonly used for non-profits in the UK. The new organisation will be created by consultation  of the interim board and prospective organisational members.</p>
			
			<h2><a name="vision"></a>openEHR Vision</h2>
			<p>The openEHR Foundation vision is of a world in which healthcare routinely obtains benefit from ICT, in particular:</p>
			<ul>
				<li>life-long interoperable electronic health records (EHRs);</li>
				<li>computing on EHRs to improve the quality of health care and research.</li>
			</ul>
			
			<h2><a name="mission"></a>openEHR Mission</h2>
			<p>The Foundation is proceeding on the basis of three principles: rigour, engagement and trust. These correspond to the key activities of the Foundation, organised under the four Programs:</p>
			<ul>
				<li><a href="../programs/specification/">Specification Program</a>:
					<ul>
						<li>developing rigorous, open specifications, validated by implementation;</li>
						<li>participating in international standards development;</li>
					</ul>
				</li>
				<li><a href="../programs/clinicalmodels/">Clinical Models Program</a>: 
					<ul>
						<li>developing clinical models (archetypes and templates), terminology interfaces;</li>
						<li>engaging in clinical implementation projects;</li>
					</ul>
				</li>
				<li><a href="../programs/software/">Software Program</a>: 
					<ul>
						<li>developing open-source software and tools;</li>
						<li>participating in connectathons and implementation trials;</li>
					</ul>
				</li>
				<li><a href="../programs/localisation/">Localisation Program</a>: 
					<ul>
						<li>advocacy and locale-based education and dissemination;</li>
						<li>working with national standards organisations;</li>
					</ul>
				</li>
			</ul>
			<p>All of openEHR Programs will support health informatics education.</p>
			
			<h3>Developing Trust: patients and citizens at the centre</h3>
			<p>As we develop the specifications and engage clinicians, it is increasingly important to ensure that the platform benefits people using the health service.
			At this point the openEHR architecture ensures:</p>
			<ul>
				<li>that information (rather than just authorisation data) can be kept in personal storage such as a memory key or phone;</li>
				<li>that information can be stored with no identifying information within the EHR;</li>
				<li>that information does not have to be centralised, being stored and/or made available only where it is required;</li>
				<li>accountability of users and providers;</li>
				<li>that the owner of the record can partition the information and control access if required.</li>
			</ul>
			<p>The next phase of uptake and implementation will require careful scrutiny by those using the health service and providers of personal health record services.</p>
			
			<h3>openEHR as a standard</h3>
			<p>The success of openEHR is in no small part due to the formal acceptance of CEN 13606 as a European and ISO standard. This standard is based on many aspects of the openEHR design approach, and part 2 of the standard is a snapshot of the openEHR Archetype specifications. The openEHR Foundation will work closely with CEN, ISO, HL7 and OMG and other standards organisations on EHR-related and clinical modelling standards.</p>
			<p>As terminology is a key-stone component of semantic interoperability, openEHR archetypes explicitly provide various ways to implement terminology bindings. The Foundation will work closely with IHTSDO on all terminology-related matters, as well as with other terminology maintainers.</p>
			
			<h3>Finally...</h3>
			<p>The openEHR Foundation will continue to proceed based on its usual 3 key activities ... implementation, implementation, implementation.</p>
		</div>
			
	</div>

	<div id="BottomMenu">
		<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>