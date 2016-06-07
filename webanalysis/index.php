<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; text-align: left; padding: 1.5cm 1.5cm 1.5cm 1.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">Level 2: <b>Web Analysis</b></h1>
        </br>
        <p style="font-family:verdana; font-size:120%;">
          <b>
            Physicists at the <a href="http://atlas.cern/">ATLAS</a> Experiment visualise collision data with plots and graphs.
            They are used in every publication, from simple analyses to headline-making discoveries.
          </br>
        </b>
      </br>
      In this section, you will learn to use these plots to:

      <ul style="font-family:verdana; font-size:110%; padding: 0.5cm 1.0cm 1.0cm 1.0cm;">
        <li>make comparisons to theoretical predictions</li>
        <li>examine systematic and theoretical errors</li>
      </ul>
    </p>
  </td>
  <td style="width:50%; padding: 0.1cm 0.2cm;">
    <img src="../DataAndTools/pictures/ATLAS_imagine_initial_page_4.png" alt="Web Analysis" style="width:100%">
  </td>
</tr>
</table>
</div>
<!-- end Head of page-->

<div class="container" style="padding: 2.0cm 1.5cm 1.5cm 1.5cm;">
  <h2>Documentation</h2>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#docs">Open/Close the Book</button>
  <div id="docs" class="collapse">
    <iframe width="100%" height="850" src="https://cheatham1.gitbooks.io/openatlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

<!-- Tabs  -->
<div class="container">
  <!-- <h2>Dynamic Tabs</h2>-->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu0">ROOT notebook view</a></li>
    <li><a data-toggle="tab" href="#menu1">Executable notebooks</a></li>
  </ul>

  <CENTER>
    <div class="tab-content">
      <div id="menu0" class="tab-pane fade in active">
        <iframe width="100%" height="850" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/DataAndTools_cpp_notebook_03_2016_example01_v0.0.ipynb" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="menu1" class="tab-pane fade">
        <a href="http://mybinder.org/repo/artfisica/rootbinder" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/binder_view.png" alt=""></a>
      </div>
    </div>
  </CENTER>
</div>

<?php include('../menu.html'); ?>

<?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>