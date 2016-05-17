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
          <img src="/budgetvisualization/img/slides/slide17_a.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>FY2017 Proposed Budget</h2>
            		  <ul>
            		  	<li>Totals $858.6M, an increase of $25M (3%) over the FY2016 Adopted Budget</li>
                    <li>Allocates one penny of property tax revenue ($5.7M) to affordable housing programs</li>
                    <li>Allocates one penny of property tax revenue ($5.7M) to fund the debt service on acquiring the Dorothea Dix property</li>
                    <li>Funds initiatives in each of the six Key Focus Areas of the City’s Strategic Plan</li>
            		  </ul>
                </p>
<!--                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#6" target="_blank" class="border-button">
                  Read or Download Budget Details
                   </a>
-->           </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide17_1.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Safe, Vibrant and Healthy Community</h2>
                <p>
            		  <ul>
                    <li>Expands tax credit program to increase supply of affordable rental units in the City</li>
                    <li>Funds a new water and sewer bill assistance program to aid qualifying Raleigh residents with past due bills</li>
                    <li>Creates a new downtown crew to improve service levels for litter pickup, trash removal, and cleaning</li>
                    <li>Implements a pilot of body-worn cameras in the Police Department to strengthen the public’s trust in our law enforcement officers</li>
                    <li>Opens a new 911 dispatch center, and provide 10 additional 911 call takers</li>
                    <li>Provides capital funding for a new law enforcement training center, new Fire Department administrative offices, and a new Fire Station #1</li>
                    <li>Begins a long-term fire apparatus replacement plan</li>
            		  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#7/z" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide17_2.jpg" />
            <div class="slide-overlay">
              <h2>Arts &amp; Cultural Resources</h2>               
                <p>
            		  <ul>
                    <li>Begins master planning for Dorothea Dix Park this Summer</li>
                    <li>Funds monthly editions of Oak City Sessions, highlighting our local music talent</li>
                    <li>Adds a position in City Planning for historic preservation and fund a survey of properties for potential inclusion in the National Historic Register</li>
                    <li>Enhances our public art collection with an additional art exhibit curator position</li>
            		  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#8/z" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide17_3.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Economic Development and Innovation</h2>
                <p>
            		  <ul>
                    <li>Implements Building Upfit Grant program with $500,000 in annual funding</li>
                    <li>Adds  positions to boost marketing and other efforts in the Office of Economic Development and Innovation</li>
                    <li>Adds Development Services positions to enhance services for large-scale projects</li>
                    <li>Adds a planner position to focus on civic design projects</li>
                    <li>Funds additional area planning, including Avent Ferry Road</li>
            		  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#8/z" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide17_4.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Growth and Natural Resources</h2>
                <p>
                  <ul>
                    <li>Adds 12 positions and program funds to open four renovated or new parks, including Thomas G. Crowder Woodland Center, Horseshoe Farm Nature Reserve, Forest Ridge Park, and Moore Square</li>
                    <li>Increases water and sewer volumetric rates, and infrastrucuture fees, to fund long-term infrastructure maintenance program; Average residential customer will see $1.99 increase per month</li>
                    <li>Increases the stormwater fee by $1 per month to fund more capital investment in drainage assistance, system repairs, and acquiring flood-prone property</li>
                    <li>Adds 12 positions to create two stormwater project crews to expedite construction of stormwater infrastructure</li>
                    <li>Increases monthly fee residential solid waste by 75 cents to fund route efficiency changes and move closer to 80% cost recovery goal </li>
                  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#9/z" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide17_5.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Transportation and Transit</h2>
                <p>
                  <ul>
                    <li>Adds three positions to support and expedite capital project implementation</li>
                    <li>Provides matching funds for grant to implement a new BikeShare program, and create a BikeShare coordinator position</li>
                    <li>Adds two positions to prepare for the future opening of Raleigh Union Station. </li>
                  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#10/z" target="_blank" class="border-button">
                  Read or Download Budget Details
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/budgetvisualization/img/slides/slide17_6.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Organizational Excellence</h2>
                <p>
                  <ul>
                    <li>Funds a citizen survey, to be administered in Fall 2016, to collect citizen feedback on City services</li>
                    <li>Invests in a new downtown civic campus, which will consolidate City services currently spread across over six sites, improving customer service and civic engagement, increasing staff efficiency, and creating new economic development opportunities</li>                  
                  </ul>
                </p>
                <a href="http://www.raleighnc.gov/content/extra/Books/BudgetManagement/FY2017Budget/#10/z" target="_blank" class="border-button">
                  Read or Download Budget Details
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
            <h2>Ten Largest Changes in Proposed FY17 Budget over Last Year's Budget</h2>
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
