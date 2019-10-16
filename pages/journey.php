<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Anfahrt';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}

<h1>Karte</h1>
<link rel="stylesheet" type="text/css" href="../css/map.css"></link>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../css/ie_map.css"></link>
<![endif]-->
<script type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"></script>
<script type="text/javascript" src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
<script type="text/javascript" src="../js/tom.js"></script>

<script type="text/javascript">
//<![CDATA[

var map;
var layer_mapnik;
var layer_tah;
var layer_markers;

function drawmap() {
    var popuptext="<font color=\"black\"><b>WHG-Durmersheim<br>Weisenburgerstraße 42<br>76448 Durmersheim</b><p><img src=\"test.jpg\" width=\"180\" height=\"113\"></p></font>";

    OpenLayers.Lang.setCode('de');

    // Position und Zoomstufe der Karte
    var lon = 8.268300;
    var lat = 48.935292;
    var zoom = 7;

    map = new OpenLayers.Map('map', {
        projection: new OpenLayers.Projection("EPSG:900913"),
        displayProjection: new OpenLayers.Projection("EPSG:4326"),
        controls: [
            new OpenLayers.Control.Navigation(),
            new OpenLayers.Control.LayerSwitcher(),
            new OpenLayers.Control.PanZoomBar()],
        maxExtent:
            new OpenLayers.Bounds(-20037508.34,-20037508.34,
                                    20037508.34, 20037508.34),
        numZoomLevels: 18,
        maxResolution: 156543,
        units: 'meters'
    });

    layer_mapnik = new OpenLayers.Layer.OSM.Mapnik("Mapnik");
    layer_markers = new OpenLayers.Layer.Markers("Address", { projection: new OpenLayers.Projection("EPSG:4326"),
    	                                          visibility: true, displayInLayerSwitcher: false });

    map.addLayers([layer_mapnik, layer_markers]);
    jumpTo(lon, lat, zoom);

    // Position des Markers
    addMarker(layer_markers, 8.268300, 48.935292, popuptext);

}

//]]>
    </script>
  <body onload="drawmap();">

  <div id="header">
   <div id="content">Karte (Testversion)</div>
   <div id="osm">© <a href="http://www.openstreetmap.org">OpenStreetMap</a>
     und <a href="http://www.openstreetmap.org/copyright">Mitwirkende</a>,
     <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.de">CC-BY-SA</a>
   </div>
  </div>
  <div id="map">
  </div>
  <div id="osm">©<a href="http://www.openstreetmap.org">OpenStreetMap</a>
   und <a href="http://www.openstreetmap.org/copyright">Mitwirkende</a>,
   <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.de">CC-BY-SA</a>
 </div>

 <body onload=drawmap();>
