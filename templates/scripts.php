<!--====== JQUERY ======-->
<script src="libs/jquery/jquery.min.js"></script>
<!--====== GLIDER JS ======-->
<script src="libs/glider/glider.min.js"></script>
<!--====== AOS JS ======-->
<script src="libs/aos/dist/aos.js"></script>
<!--====== SWEETALERT2 JS ======-->
<script src="libs/sweetalert2/sweetalert2.all.min.js"></script>
<!--====== MENU JS ======-->
<script src="libs/menu/js/menu.min.js"></script>
<!--====== SWIPER JS ======-->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!--====== MAIN JS ======-->
<script src="js/banner.js"></script>     
<script src="js/mail.js"></script>
<script>

    const buttons = document.getElementsByClassName("buttonMasInfo");
    var modalTitle
    var modalId
    const buttonPressed = e => {
        modalTitle = $(e.target).attr('data-titulo');  
        modalId = $(e.target).attr('data-id');  
    }

    for (let button of buttons) {
        button.addEventListener("click", buttonPressed);
    }

    let swiper = new Swiper(".mySwiper", {
        direction: 'vertical',
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        slidesPerView: 1,
        mousewheel: true,
    });

    menu = new Menu({options: {element: '.menu', openWith: '.navbar__button', closeWith: '.menu__button', size:'20rem', from: 'right',
        callbackOnOpen: function(){
            if($(window).width() <= 600)
            {
                $('body').css('overflow', 'hidden')
            }
        },
        callbackOnClose: function(){
            if($(window).width() <= 600)
            {
                $('body').css('overflow', 'auto')
            }
        } 
    }})
    menu.init();
    menu.closeWith('.menu__link')

    modal = new Menu({options: {element: '.modal', openWith: '.espacios__card', closeWith: '#modalButtonCerrar', size:'lg', from: 'right', 
        callbackOnOpen: function(){
            var urlPost = 'admin/bd/ParquesInd/index.php';
            $.ajax({
                type : 'POST',
                data : { funcion : 'cargarParque', idcat_parques_ind : modalId },
                url : urlPost,
                success : function(response){
                    parque = JSON.parse(response.trim());
                    $("#ubicacionModal").html(parque[0].ubicacion);

                    var listDatos = JSON.parse($.ajax({
                        type : 'POST',
                        url : urlPost,
                        async : false,
                        data : { funcion : 'obtenerDatosTecnicos', idcat_parques_ind : modalId },
                    }).responseText);

                    $("#listDatos").html(null);
                    for (var i = 0; i < listDatos.length; i++) {
                        $("#listDatos").append(`<li>${listDatos[i].descripcion}</li>`);
                    }

                    var listServicios = JSON.parse($.ajax({
                        type : 'POST',
                        url : urlPost,
                        async : false,
                        data : { funcion : 'obtenerServicios', idcat_parques_ind : modalId },
                    }).responseText);

                    $("#listCaracteristicas").html(null);
                    for (var i = 0; i < listServicios.length; i++) {
                        $("#listCaracteristicas").append(`<li>${listServicios[i].descripcion}</li>`);
                    }

                    var galeria = JSON.parse($.ajax({
                        type : 'POST',
                        url : urlPost,
                        async : false,
                        data : { funcion : 'cargarGaleriaParque', idcat_parques_ind : modalId },
                    }).responseText);

                    $("#SwiperGallery").html(`<div class="swiper-slide slide_1">
                        <img src="admin/${parque[0].img_principal}" alt="">
                        </div>`).hide().fadeIn();

                    for (var i = 0; i < galeria.length; i++) {
                        $("#SwiperGallery").append(`<div class="swiper-slide slide_1">
                            <img src="admin/${galeria[i].ruta}" alt="">
                            </div>`);
                    }
                },
                error : function(e){
                    console.log(e.responseText);
                },
                complete : function(){
                    $('#modal__title').text(modalTitle).hide().fadeIn();
                    $('body').css('overflow', 'hidden')
                }
            });
        },
        callbackOnClose: function(){
            $('body').css('overflow', 'auto')
        } 
    }})
    modal.init()
    modal.openWith('.buttonMasInfo')

    AOS.init();
</script>
<script src="js/index.js"></script>     
