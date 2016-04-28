<div class="container wrapper">
  <div class="alert alert-warning" align="center">            
    The Budget information in this tool was last updated on June 18, 2015 to reflect the <strong>adopted</strong> revenue and expenditure budget for Fiscal Year 2016.    
    <br> 
    The tool is still in a beta phase of development, so we welcome you to <a class="link" href="https://docs.google.com/forms/d/1fZiTbLURyLWOoval69mD5_nHSyAIJTiu9DbcKXKwDbQ/viewform">send us your feedback</a>! 
  </div>
</div>  
<div class="purple-border" id="avb-menubar" >

  <div class="container">

    <!-- <div class="homebutton" onclick='window.location = "/"'> 
      
      <div style="font-size:32px;line-height:28px; display:inline-block"> Asheville, NC  </div>
      <img src="img/logo@High.png" alt="avb-logo" width=24 height=24 />
   </div> -->

    <div id="navbar-links" style="line-height:30px;"> 

     <!-- <div onclick='window.location = "/budgetvisualization/expenses"' class="entry homebutton"> City Budget, Visualized </div>
      -->
     <div class="entry navbar-margin">
        <span class="menubutton section margin" data-section="revenues"><a href="/budgetvisualization/revenues">Revenues</a></span>
        <span class="menubutton section margin" data-section="expenses"><a href="/budgetvisualization/expenses">Expenses</a></span>
	<span class="menubutton section margin">&nbsp;&nbsp;</span>
<!--        <span class="menubutton section margin" data-section="funds"><a id="navbar-funds" href="/funds">Funds &#38; Reserves</a></span>-->
    </div>

    <div class="entry" id="navbar-right" style="float:right;">
        <input id="searchbox" type="text" class="margin menubutton margin search" placeholder="Search">
    
        <div class="menubutton margin">
          <span> <i class="icon-th-large"></i> </span>
          <a id="navbar-map" href="javascript:avb.home.hide();switchMode('t'); "> Chart view </a>
        </div>
        <div class="menubutton margin">
          <span> <i class="icon-th-list"></i> </span>
          <a id="navbar-table" href="javascript:avb.home.hide();switchMode('l'); "> Tabular view </a>
        </div>

        <ul id="yeardrop" class="nav menubutton">
          <li  id="yeardrop-container" class="dropdown" style="display:none;">
            <a id="yeardrop-label" class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
            <ul id="yeardrop-list" class="dropdown-menu vhscrollable" role="menu">
            </ul>
          </li>
          <li>
          <select id="yeardrop-container-mobile" style="display:none; width:100px; height:28px">
          </select>
        </li>
        </ul>

      </div>
    </div>


  </div>
</div>
