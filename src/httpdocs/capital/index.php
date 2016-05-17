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
        long-term vision and strategic plan. The program proposes budgeting <strong>$167.6 million</strong> in capital spending for FY2017, and <strong>$1.21 billion</strong> over the next 5 years. The latter figure represents a 16% increase over last years capital budget. 
        The map below shares details of the CIP projects currently planned based on its location throughout the city.*
        <br> 
        <h3>Capital Projects at Various Locations</h3>
        Some capital projects involve maintenance at multiple facilities throughout the city. These projects primarily fall within the Parks and Recreation element and are not reflected on this map, but are instead shown in the table on our <a href="https://data.raleighnc.gov/d/rvdc-t75z" target="blank">open data site</a>.
        <br>
        <iframe width="100%" title="Unmapped Capital Project Categories - Proposed FY17" height="425px" src="https://data.raleighnc.gov/w/dntg-xnx8/2fxh-wcp7?cur=dIOeMIYZjiK&from=root" frameborder="0"scrolling="no"><a href="https://data.raleighnc.gov/Fiscal-Year-2017-Proposed-to-Council/Unmapped-Capital-Project-Categories-Proposed-FY17/dntg-xnx8" title="Unmapped Capital Project Categories - Proposed FY17" target="_blank">Unmapped Capital Project Categories - Proposed FY17</a></iframe>
      </div>
        <span class = 'fl_r'>
          * Please note: This map displays only projects proposed in the FY17-FY21 CIP with a known location. The map does not include technology projects and planning studies.
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
