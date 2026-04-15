<!-- 
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
-->

<?php 
    $title1 = "Map Explorer";
    $title2 = "Map Explorer";
    $style_sheet = "map_explorer.css";
    include('assets/php/header.php');
    include('assets/php/menu.php');
?>

            <div class="main">
                <h2>Verona Map Explorer</h2>
                <p>Click on the marked areas to learn more about Verona's famous landmarks!</p>
                <p>(When resizing the window, reload the page!)</p>

                    <hr />

                <div class="map-container">
                    <img src="assets/media/map.jpg" id="veronaMap" usemap="#landmarksMap" alt="Map of Verona">
                </div>

                <map name="landmarksMap">
                    <area shape="circle" coords="615,225,25" alt="Casa di Giulietta" data-info="juliet" title="Casa di Giulietta">
                    <area shape="circle" coords="160,120,40" alt="San Zeno Basilica" data-info="sanzeno" title="San Zeno Basilica">
                    <area shape="circle" coords="55,290,30" alt="Porta Palio" data-info="portapalio" title="Porta Palio">
                    <area shape="circle" coords="210,500,40" alt="Porta Nuova" data-info="portanuova" title="Porta Nuova">
                    <area shape="circle" coords="290,210,40" alt="Castelvecchio" data-info="castelvecchio" title="Castelvecchio">
                    <area shape="circle" coords="470,175,35" alt="Porta Borsari" data-info="portaborsari" title="Porta Borsari">
                    <area shape="circle" coords="655,320,40" alt="San Fermo" data-info="sanfermo" title="San Fermo">
                    <area shape="circle" coords="630,60,25" alt="Pomte Pietra" data-info="pontepietra" title="Ponte Pietra">
                    <area shape="circle" coords="470,290,50" alt="Arena di Verona" data-info="arena" title="Arena di Verona">
                </map>

                <div id="landmarkInfo"></div>
            </div>
    </body>
</html>


