<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Raleigh, NC Budget Visualization</title>
    <meta name='description' content='Government budgets can be tough to understand, but now the City of Raleigh, North Carolina is providing the next generation of accessibility in financial information that allows citizens to view, engage, and discuss.'>
    <?php include '../includes/template_elements/resources.php'; ?>
    <script src="../js/readmore.js"></script>   
  </head>
  <body class="capitalimprovements">
    <div class='header-container'>
      <?php include '../includes/template_elements/top-bar.php'; ?>     
    </div>
    <div>
      <div class="container wrapper">
        <div class="well">
        <h3>Capital Improvement Program</h3>
        The capital improvement program (CIP) is a five year plan that allocates
        limited financial resources to high priority needs. It is a primary mechanism for implementing the city’s
        long-term vision and strategic plan. The program proposes budgeting <strong>$215.6 million</strong> in capital spending for FY2016, and <strong>$1.04 billion</strong> over the next 5 years. The FY16 program focuses on the previously deferred maintenance of buildings and infrastructure, primarily for the city’s water and sewer system, transportation, and parks system. The map below shares details of the CIP projects currently planned based on its location throughout the city.*

        <h3>Highlights</h3>
            <ul>
             <li>Implements the $92 million bond for parks, recreation, and cultural resources, approved by voters in 2014. Initial projects include the Crabtree Creek West Greenway, Lineberry Neighborhood Park, and Devereau Meadows master planning.</li>
             <li>Continues implementation of $75 million transportation bond, approved by voters in Fall 2013. The bond program includes several road widenings, as well as funding for streetscapes, traffic calming, and matching funds for NCDOT projects.</li>
             <li>Invests $142.5 million over the next five years to replace aging water and sewer mains and other infrastructure in public utilities.</li>
            </ul>
        <br> 
        
        <h3>Capital Projects at Various Locations</h3>
        Some capital projects involve maintenance at multiple facilities throughout the city. These projects primarily fall within the Parks and Recreation element and are not reflected on this map, but are instead shown in the table on our <a href="https://data.raleighnc.gov/category/finance" target='blank' open data site</a>.
        </div>
        <span class = 'fl_r'>
          * Please note: This map displays only projects proposed in the FY16-FY20 CIP. Map does not include technology projects and planning studies.
        </span>
        <iframe class="border" width="100%" height="610" frameborder="0" scrolling="no" src="http://ral.maps.arcgis.com/apps/webappviewer/index.html?id=8c9d7bab08ae43ea9edf134c07722cbd"></iframe>
      </div>  
    </div>
    <script>
      $('.well').readmore();
    </script>
    <?php include '../includes/template_elements/footer.php'; ?>
  </body>
</html>
