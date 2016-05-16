<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Raleigh, NC Budget Visualization</title>
  <meta name='description' content='Government budgets can be tough to understand, but now the City of Raleigh, North Carolina is providing the next generation of accessibility in financial information that allows citizens to view, engage, and discuss.'>
  <?php include '../includes/template_elements/resources.php'; ?>
  
  <!-- PAGE SPECIFIC CSS -->
  <link rel="stylesheet" href="flexslider/flexslider.css">
  <style>
    rect.plus{
      fill: CornflowerBlue;
    }
    rect.minus{
      fill: Tomato;
    }
    .labelText{
      font-weight:bold;
      text-align: center; 
    }
    #categorySelector{
      vertical-align:top;
    }
  </style>
  <!-- END PAGE SPECIFIC CSS -->

  <!-- PAGE SPECIFIC SCRIPTS -->
  <script src="flexslider/jquery.flexslider-min.js"></script>
  <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="budgetdiff.js"></script> 
  <!-- END PAGE SPECIFIC SCRIPTS -->

</head>

<body class="whatsnew">
  <div class='header-container'>
    <?php include '../includes/template_elements/top-bar.php'; ?>     
  </div>
  <div class="slider">
    <div class="flexslider carousel">
      <ul class="slides">
        <li>
          <img src="/budgetvisualization/img/slides/slide7.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Budget Themes for 2015-2016</h2>
                <p>Three themes emerge from the FY16 budget proposal, which are reflective of Raleigh’s dynamic, growing and changing community:
            		  <ol>
            		  	<li>Increasing service demands resulting from population and development activity growth outpace Raleigh’s projected revenue growth;</li>
            		  	<li>Smart strategies are necessary to align new and existing resources to address the community’s highest priority needs; and</li>
                    <li>Future strategic investments in the areas of economic development, affordable housing, transportation and parks and cultural amenities will further define the city’s character and identity and are critical elements of sustaining Raleigh’s high quality of life in the long term.</li>
            		  </ol>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2016Budget/#6" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide4.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Revenue Highlights</h2>
                <p>
            		  <ul>
            	      <li>Economic growth increases sales tax $3.3 million (4%), over FY15 projections.</li>
                    <li>Garbage Fee increases $.75 per month, which increases the percentage of costs recovered through fees from 67% to 72%. Residential customers will pay a combined trash collection and recycling fee of $14.05 monthly.</li>
            	      <li>Public Utilities: 6% increase in water and sewer volumetric rates as well as increases to the water and sewer infrastructure replacement fees. For customers using 5 CCFs of water monthly, this equates to an increase of $3.24 per month.</li>
                    <li>The property tax rate includes a 1.72 cent increase proposed for implementation of the voter approved 2014 Parks bond referendum.  This tax increase is projected to raise $8.8 million annually.</li>
                    <li>Loss of business privilege license tax revenue impacts the City’s ability to respond fully to increasing service demands from community and development activity growth.</li>
            		  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2016Budget/#66" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide3.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Expenditure Highlights</h2>
                <p>
            		  <ul>
                    <li>Total net operating and capital budget proposed for FY16 is $833.6 million.</li>
                    <li>$369.1 million net total budget for enterprise funds, including Public Utilities, Stormwater, Transit, Convention Center Complex and Solid Waste Services.</li>
                    <li>Opens or expands three new facilities:  Abbotts Creek Park, Dr. Martin Luther King, Jr. Memorial Gardens and Phase 1 of the Horseshoe Farm Nature Preserve, offering residents greater access to park, recreation, and cultural amenities in north, northeast, and southeast Raleigh.</li>
                    <li>Opens the Central Communications Center, which will house multiple public safety and general government functions to ensure the ongoing safety of our residents while providing reliable, secure operations across the organization.</li>
                    <li>Opens the Central Operations Facility and adds five new positions for additional support of vehicle service and equipment maintenance, reducing staff downtime and improving overall fleet utilization.</li>
            		  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2016Budget/#6" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide2.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Capital Improvements</h2>
                <p>
            		  <ul>
            		  	<li>Totals $1.04 billion over five years; $215.6 million in FY16 focused on deferred maintenance of buildings and infrastructure, primarily for the city’s water and sewer system, transportation, and parks system.</li>
            		  	<li>Implements the $92 million bond for parks, recreation, and cultural resources, approved by voters in 2014. Initial projects include the Crabtree Creek West Greenway, Lineberry Neighborhood Park, and Devereau Meadows master planning.</li>
            		  	<li>Continues implementation of $75 million transportation bond, approved by voters in Fall 2013. The bond program includes several road widenings, as well as funding for streetscapes, traffic calming, and matching funds for NCDOT projects.</li>
            		  	<li>Invests $142.5 million over the next five years to replace aging water and sewer mains and other infrastructure in public utilities.</li>
            		  </ul>
                </p>
                <a href="/budgetvisualization/capital" target="_blank" class="border-button">
                  Explore Capital Improvement Program
                </a>
              </div>
            </div>
        </li>
      </ul>
    </div>
  </div>    
  <div class="container wrapper">
    <div class="row span12">
    	<div class="row">
        <div class="well">
          <div>
            <h2>Ten Largest Changes in Proposed FY16 Budget over Last Year's Budget</h2>
          </div>
          <div id="mainFlow" class="interactionPanel">
	          <span id="selectText" class="labelText">Select Fund:</span>
	          <select id="categorySelector" onchange="buttonClick('next')">
          		<option>---</option>
          	</select>
	          <input id="radio1" type="radio" checked name="showRev" value="true" onclick="showRevHandler()"> Revenues
	          <input id="radio2" type="radio" name="showRev" value="false" onclick="showRevHandler()"> Expenses
	          <input id="viewBySelector" style="vertical-align:middle; float:right;" type="button" value="View By Account" onclick="buttonClick('account')"/>
	          <input id="startOver" style="vertical-align:middle; float:right;" type="button" value="Start Over" onclick="buttonClick('reset')"/>
          </div> 
        </div>          
      </div>
      <div class="interactionPanel span12" style="">
        <h4 id="contextText" align="center">TBD</h4>
        <svg class="chart span6" id="chart" width="700" height="470"></svg>
      </div>
    </div>
    <!-- Potential 2nd column 
    <div class="row span5">
      <ul class="highlights">
        <li>
          <h3>FY16 Budget Priorities</h3>
          <ul>
            <li>Ensure the long-term financial sustainability and financial strength of our general governmental operations and enterprises</li>
            <li>Invest in our outstanding workforce with competitive compensation and benefit level</li>
            <li>Respond to community growth and increasing demands for our core services</li>
            <li>Continue our investment in capital facilities, roads, pipes and technology infrastructure</li>
          </ul>
        </li>
        <li>
          <h3>Revenue Highlights</h3>
          <ul>
            <li>Sales tax revenue is estimated to increase 4%</li>
            <li>Development revenues are projected to increase 3% from increasing permits and economic development activity</li>
            <li>Parks bond approved in the November 2014 referendum increases the tax rate by 1.72 cents per $100 of tax valuation</li>
          </ul>
        </li>
        <li>
          <h3>Expenditure Highlights</h3>
          <ul>
            <li>4% overall increase compared to the FY15 Adopted Budget</li>
            <li>New or expanded facilities opening in FY16 include Central Communications Center, Central Operations Facility, Abbotts Creek Park and MLK Jr. Memorial Gardens</li>
            <li>Increases staffing to address growth and development demands in core service areas</li>
            <li>Competitive compensation increase in line with national trends</li>
          </ul>
        </li>
      </ul>
    </div>
  -->  
  </div>
 

<!--Fund,Department,Division,Account,Amount, -->
  <script>    
    d3.csv("budgetdiffs.csv", forceAmountType, afterRead);
  </script>
  <?php include '../includes/template_elements/footer.php'; ?>
</body>
<script type="text/javascript">
$('document').ready(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    slideshowSpeed: 11000,
    // animationLoop: false,
    // itemWidth: 210,
    // itemMargin: 5,
    // pausePlay: true,
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});
</script>
</html>

<!--   Other Sliders (Raleigh)  
        <li>
          <img src="/budgetvisualization/img/slides/slide4.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Staffing Highlights</h2>
                <p>
		  <ul>
		    <li>Additional X FTE positions are budgeted for FY 2015-16 budget</li>
		    <li>Cost of Living increase of X% for existing staff </li>
		  </ul>
                </p>
                <a href="../docs/Staffing_summary_detail.pdf" target="_blank" class="border-button">
		  Read staffing details
                </a>
                <a href="xxx" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide5.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Budget Highlights By Fund</h2>
                <p>
		  <ul>
		    <li>General: Expenditures up 3.8%</li>
		    <li>Water Resources: Rate adjustments to yield additional $460,000</li>
		    <li>Stormwater: Tiered rate structure proposed</li>
		    <li>Transit Services: Funding proposed for limited Sunday service and Route C improvements</li>
		    <li>US Cellular Center: Event bookings &amp; operating revenue continue to trend up</li>
		    <li>Housing Trust: General Fund contribution of $500,000 continues</li>
		  </ul>
                </p>
                <a href="../docs/Funds_Budget_Details.pdf" target="_blank" class="border-button">
		  Read fund budget details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide7.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Changes from the Proposed Budget</h2>
                <p>
		  <ul>
		    <li>2 additional FTE positions funded by the Street Utility Cut Fund</li>
		    <li>1 additional FTE position in the City Attorney's Office funded by the General Fund</li>
		    <li>$100,000 reallocation of funds within the Capital Improvement Program to Neighborhood Sidewalk Program
		  </ul>
                </p>
                <a href="../docs/Changes_proposed_adopted.pdf" target="_blank" class="border-button">
		  Read more about the changes from Proposed to Adopted
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>        
-->
