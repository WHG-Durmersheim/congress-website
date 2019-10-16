<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Anfahrt';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>

<h1>Karte</h1>
<div id="mapdiv"></div>
  <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
  <script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());

    var pois = new OpenLayers.Layer.Text( "My Points",
                    { location:"../data/locations.txt",
                      projection: map.displayProjection
                    });
    map.addLayer(pois);
 // create layer switcher widget in top right corner of map.
    var layer_switcher= new OpenLayers.Control.LayerSwitcher({});
    map.addControl(layer_switcher);
    //Set start centrepoint and zoom
    var lonLat = new OpenLayers.LonLat( 9.5788, 48.9773 )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );
    var zoom=11;
    map.setCenter (lonLat, zoom);

  </script>
