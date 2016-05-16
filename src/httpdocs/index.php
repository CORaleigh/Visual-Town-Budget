<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Raleigh Budget Visualization</title>
    <meta name="description" content="An interactive tool to learn more about the budget of the City of Raleigh, North Carolina." />
    
    <?php
       //$dataSections = array('revenues', 'expenses', 'funds');
       $dataSections = array('revenues', 'expenses');
       require_once 'includes/imports.php';
    ?>
    <script>
    $(document).ready(initialize);
    </script>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="/budgetvisualization/css/page.css" rel="stylesheet" type="text/css" />
  </head>
  <body class='show-me-the-money'>
    <div class='header-container'>
      <?php include 'includes/template_elements/top-bar.php'; ?>     
    </div>
    <?php
      require_once 'includes/home.php';
      require_once 'includes/navbar.php';
      require_once 'includes/container.php';
      require_once 'includes/footer.php';
      require_once 'includes/templates.php';
      require_once 'includes/datafiles.php';
    ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-9880547-7', 'auto');
    ga('send', 'pageview');
    </script>
    <script> 
    var $buoop = {c:2}; 
    function $buo_f(){ 
     var e = document.createElement("script"); 
     e.src = "//browser-update.org/update.js"; 
     document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
    </script>     
    <?php include 'includes/template_elements/footer.php'; ?>
  </body>
</html>