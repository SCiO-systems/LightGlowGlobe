# GlowGlobe

The integration of GlowGlobe inside a site can be done following the next steps.

  - Put as is the all of the files as is from our  [github](https://github.com/SCiO-systems/LightGlowGlobe) inside the /var/www/html/
folder of your host machine.
  - Edit the [proxyPolygon.php](https://github.com/SCiO-systems/LightGlowGlobe/blob/master/proxyPolygon.php) $geotrellisIp variable and put the ip and port of the Geotrellis server that hosts the catalogues.
  - The map can be loaded by calling the [main.js](https://github.com/SCiO-systems/LightGlowGlobe/blob/master/lightGlowGlobe/static/js/main.js)  and the [main.css](https://github.com/SCiO-systems/LightGlowGlobe/blob/master/lightGlowGlobe/static/css/main.css) inside your code.               
     ```sh
    <link href="/lightGlowGlobe/static/css/main.css" rel="stylesheet">
    <link href="/lightGlowGlobe/static/js/main.js" rel="stylesheet">
    ```
- The div id of the map element is "map"
