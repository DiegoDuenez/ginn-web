<section class="espacios" id="espaciosdisponibles">
    <h2 class="title title--dark">Espacios disponibles</h2>
    <div class="espacios__estados">
        <?php 
        require_once("admin/bd/Ciudades/Ciudades.php");
        $Ciudades = new Ciudades();
        $listaCiudades = json_decode($Ciudades->cargarUbicaciones(), true);

        $number = 0;
        foreach ($listaCiudades as $ciudad) {
            $nombre = $ciudad["nombre"];
            $id = $ciudad["id_ciudad"];

            $active = $number == "0" ? " espacios__estado--active" : "";
            echo "<div class='espacios__estado$active' data-id='$id'>$nombre</div>";
            $number++;
        }
        ?>
    </div>
    <div class="espacios__container" id="espaciosContainer">
      
    </div>
</section>