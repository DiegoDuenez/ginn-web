<section class='parques' id='parquesindustriales'>
    <?php 
    require_once("admin/bd/ParquesInd/ParquesInd.php");
    $ParquesInd = new ParquesInd();
    $listaParques = json_decode($ParquesInd->cargarParques(), true);
    $number = 0;
    foreach ($listaParques as $parque) {
        $nombre = $parque["nombre"];
        $img_principal = $parque["img_principal"];
        $idcat_parques_ind = $parque["idcat_parques_ind"];
        $descripcion = $parque["descripcion"];

        if ($number % 2 == 0) {
            echo "<div class='parques__container parques__container--end' data-aos='fade-left'>
            <div class='parques__card'>
            <div class='parques__card-image'>
            <img src='admin/$img_principal' alt='Parque'>
            </div>
            <div class='parques__card-body'>
            <h2>$nombre</h2>
            <p>$descripcion</p>
            <!--<p>Venta y renta</p>-->
            <button class='button buttonMasInfo' data-id='$idcat_parques_ind' data-titulo='$nombre'>
            Más información
            </button>
            </div>
            </div>
            </div>";
        }
        else {
            echo "<div class='parques__container' data-aos='fade-right'>
            <div class='parques__card'>
            <div class='parques__card-body'>
            <h2>$nombre</h2>
            <p>$descripcion</p>
            <!--<p>Venta y renta</p>-->
            <button class='button buttonMasInfo' data-id='$idcat_parques_ind' data-titulo='$nombre'>
            Más información
            </button>
            </div>
            <div class='parques__card-image'>
            <img src='admin/$img_principal' alt='Parque'>
            </div>
            </div>
            </div>";
        }
        $number++;
    }
    ?>
</section>