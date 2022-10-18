<section class="espacios" id="espaciosdisponibles">
    <h2 class="title title--dark">Espacios disponibles</h2>
    <div class="espacios__estados">
        <!--<div class="espacios__estado espacios__estado--active">Coahuila</div>
        <div class="espacios__estado">Durango</div>
        <div class="espacios__estado">Guerrero</div>
        <div class="espacios__estado">Nayarit</div>
        <div class="espacios__estado">Sinaloa</div>-->

        <?php 
        require_once("admin/bd/Ciudades/Ciudades.php");
        $Ciudades = new Ciudades();
        $listaCiudades = json_decode($Ciudades->cargarUbicaciones(), true);

        $number = 0;
        foreach ($listaCiudades as $ciudad) {
            $nombre = $ciudad["nombre"];
            $active = $number == "0" ? " espacios__estado--active" : "";
            echo "<div class='espacios__estado$active'>$nombre</div>";
            $number++;
        }
        ?>
    </div>
    <div class="espacios__container">
        <div class="espacios__card" data-aos="fade-up">
            <div class="espacios__card-header">
                <img src="resources/img/mision-img.png" alt="Parque">
            </div>  
            <div class="espacios__card-body">
                <p>Nave industrial oriente</p>
                <p class="espacios__card-title">Cedis III</p>
                <p><i class="fa-solid fa-location-dot"></i> Parque industrial oriente Torreón Coahuila</p>
                <p><img src="resources/img/terreno.png" width="20px"> 2,500 m2</p>
                <p><img src="resources/img/terreno.png" width="20px"> 1,000 m2 de oficinas</p>
            </div>  
        </div>
        <div class="espacios__card" data-aos="fade-up">
            <div class="espacios__card-header">
                <img src="resources/img/mision-img.png" alt="Parque">
            </div>  
            <div class="espacios__card-body">
                <p>Nave industrial oriente</p>
                <p class="espacios__card-title">Cedis III</p>
                <p><i class="fa-solid fa-location-dot"></i> Parque industrial oriente Torreón Coahuila</p>
                <p><img src="resources/img/terreno.png" width="20px"> 2,500 m2</p>
                <p><img src="resources/img/terreno.png" width="20px"> 1,000 m2 de oficinas</p>
            </div> 
        </div>
        <div class="espacios__card" data-aos="fade-up">
            <div class="espacios__card-header">
                <img src="resources/img/mision-img.png" alt="Parque">
            </div>  
            <div class="espacios__card-body">
                <p>Nave industrial oriente</p>
                <p class="espacios__card-title">Cedis III</p>
                <p><i class="fa-solid fa-location-dot"></i> Parque industrial oriente Torreón Coahuila</p>
                <p><img src="resources/img/terreno.png" width="20px"> 2,500 m2</p>
                <p><img src="resources/img/terreno.png" width="20px"> 1,000 m2 de oficinas</p>
            </div>  
        </div>
        <div class="espacios__card" data-aos="fade-up">
            <div class="espacios__card-header">
                <img src="resources/img/mision-img.png" alt="Parque">
            </div>  
            <div class="espacios__card-body">
                <p>Nave industrial oriente</p>
                <p class="espacios__card-title">Cedis III</p>
                <p><i class="fa-solid fa-location-dot"></i> Parque industrial oriente Torreón Coahuila</p>
                <p><img src="resources/img/terreno.png" width="20px"> 2,500 m2</p>
                <p><img src="resources/img/terreno.png" width="20px"> 1,000 m2 de oficinas</p>
            </div> 
        </div>
        <div class="espacios__card" data-aos="fade-up">
            <div class="espacios__card-header">
                <img src="resources/img/mision-img.png" alt="Parque">
            </div>  
            <div class="espacios__card-body">
                <p>Nave industrial oriente</p>
                <p class="espacios__card-title">Cedis III</p>
                <p><i class="fa-solid fa-location-dot"></i> Parque industrial oriente Torreón Coahuila</p>
                <p><img src="resources/img/terreno.png" width="20px"> 2,500 m2</p>
                <p><img src="resources/img/terreno.png" width="20px"> 1,000 m2 de oficinas</p>
            </div>  
        </div>
        <div class="espacios__card" data-aos="fade-up">
            <div class="espacios__card-header">
                <img src="resources/img/mision-img.png" alt="Parque">
            </div>  
            <div class="espacios__card-body">
                <p>Nave industrial oriente</p>
                <p class="espacios__card-title">Cedis III</p>
                <p><i class="fa-solid fa-location-dot"></i> Parque industrial oriente Torreón Coahuila</p>
                <p><img src="resources/img/terreno.png" width="20px"> 2,500 m2</p>
                <p><img src="resources/img/terreno.png" width="20px"> 1,000 m2 de oficinas</p>
            </div> 
        </div>
    </div>
</section>