<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Asheville, NC Budget App | A Code for Asheville Creation</title>
	<meta name='description' content='This website is a collaboration between Code for Asheville and the City of Asheville to improve citizens ability to view, engage and discuss the city budget.'>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
	<link href="../css/splash.css" rel="stylesheet">

	<SCRIPT TYPE="text/javascript">
	  <!--
	      function popup(mylink, windowname)
	      {
	      if (! window.focus)return true;
	      var href;
	      if (typeof(mylink) == 'string')
	      href=mylink;
	      else
	      href=mylink.href;
	      window.open(href, windowname, 'width=500,height=300,scrollbars=yes');
	      return false;
	      }
	      //-->
	</SCRIPT>
    <script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-9880547-7', 'auto');
	    ga('send', 'pageview');
    </script>
</head>
<body>
	<img src="../img/background.jpg" class="background-image" alt="background image" />
	<div class='header-container'>
		<?php 
		// include '../includes/template_elements/nav.php'; 
		?>
		<div class='container'>
			<div class="row header-area">		
				<div class="span6">
					<h1>
						Asheville City Budget<br>
						2014-2015
					</h1>
				</div>
				<div class='header-right span6'>
					<p>
						A collaborative web effort brought to you by:
					</p>									
					<a href="http://www.codeforasheville.org" target="_blank">
						Code for Asheville
					</a>
					<span>&</span>
					<a href="http://www.ashevillenc.gov" target="_blank">
						The City of Asheville
					</a>
					<div class="CTA">
						<a href="../resources/about.php" class="arrow-button">
							How Do I Get Involved?
						</a>
					</div>
				</div>					
			</div>		
		</div>
	</div>
	<div class="wrapper container">	
	</div>
	<div class="full-bleed full-bleed1">
		<div class="wrapper container">
			<div class="row">	
				<div class="span2 section-icon offset1">
				  <a href="../whatsnew/index.php"><img src="../img/bulb-icon.png" alt="bulb icon" /></a>
				</div>
				<div class="span4">
					<h3 class="section-header">
						<a href="../whatsnew/index.php" name="whatis">Tell Me What's New</a>
					</h3>
				</div>
				<div class="span5">
					<ul class="link-list">
						<li>
						  <a href="../whatsnew/index.php" class="">
						    Explore What's New In 2014-2015 &#8594;
						  </a>
						</li>
						<li>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Understand budget priorities<br/>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See highlights of revenue &amp; spending changes <br/>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interactive budget changes visualization<br/>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="full-bleed full-bleed2">
		<div class="wrapper container">
			<div class="row">	
				<div class="span2 section-icon offset1">
				  <a href="../index.php"><img src="../img/money-icon.png" alt="bulb icon" /></a>
				</div>
				<div class="span4">
				  <h3 class="section-header">
				    <a href="../index.php" >Show Me the Money</a>
					</h3>
				</div>
				<div class="span5">
				  <ul class="link-list">
				    <li>
				      <a href="../index.php" class="">
					Visualize Asheville Spending &amp; Revenue &#8594;
				      </a>
				    </li>
				    <li>
				      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interactive budget allocation visualization<br/>
				      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See how much goes where <br/>
				      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See changes over time<br/>
				    </li>						
				  </ul>
				</div>
			</div>
		</div>		
	</div>
	<div class="full-bleed full-bleed3">
		<div class="wrapper container">
			<div class="row">	
				<div class="span2 section-icon offset1">
				  <a href="../resources/resources.php"> <img src="../img/db-icon.png" alt="bulb icon" /></a>
				</div>
				<div class="span4">
				  <h3 class="section-header">
				    <a name="whatis" href="../resources/resources.php">Resources</a>
				  </h3>
				</div>
				<div class="span5">
					<ul class="link-list">
						<li>
							<a href="../resources/resources.php" class="">
							  The Gory Details &#8594;
							</a>
						</li>
						<li>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Budget process<br/>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City organization<br/>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Backup documentation<br/>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And much, much more<br/>
						</li>						
					</ul>
				</div>
			</div>
		</div>		
	</div>
	<div class="full-bleed full-bleed4">
		<div class="wrapper container">
			<div class="row">	
				<div class="span2 section-icon offset1">
				  <a href="about"><img src="../img/pencil-icon.png" alt="bulb icon" /></a>
				</div>
				<div class="span4">
					<h3 class="section-header">
						<a name="whatis" href="../resources/about.php">About This Project</a>
					</h3>
				</div>
				<div class="span5">
					<ul class="link-list">
						<li>
							<a href="../resources/about.php" class="">
								What's this about? &#8594;
							</a>
						</li>
						<li>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Why are we doing this?<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What happens next?<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How can I participate?<br/>
						</li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
	<?php include '../includes/template_elements/footer.php'; ?>
</body>
</html>
