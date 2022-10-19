$(document).ready(function(){
    $.ajax({
        type : 'POST',
        url : 'admin/bd/Ciudades/index.php',
        data : { funcion : 'cargarUbicaciones' },
        success : function(response){
            json = JSON.parse(response.trim());
            cargarProyectosCiudad(json[0].id_ciudad);
        },
        error : function(e){
            console.log(e.responseText);
        }
    });
});


function cardClick(e){
    modalTitle = $(e).attr('data-titulo')
    modalId = $(e).attr('data-id')
}

function cargarProyectosCiudad(id_ciudad){
    var urlPost = 'admin/bd/Proyectos/index.php';
    $.ajax({
        type : 'POST',
        data : { funcion : 'cargarProyectosxCiudad', id_ciudad },
        url : urlPost,
        success : function(response){
            var json = JSON.parse(response.trim())
            $('#espaciosContainer').empty()
            for(let i = 0; i < json.length; i++){
                var m2 = json[i].m2 == 0 ? "" : `<p><img src="resources/img/terreno.png" width="20px"> ${json[i].m2} m2</p>`;
                var m2_oficinas = json[i].m2_oficina == 0 ? "" : `<p><img src="resources/img/terreno.png" width="20px"> ${json[i].m2_oficina} m2 de oficinas</p>`;
                var status = json[i].status == 1 ? "<div class='espacios__status'>DISPONIBLE</div>" : json[i].status == 2 ? "<div class='espacios__status espacios__status--orange'>RESERVADO</div>"
                : "<div class='espacios__status espacios__status--red'>NO DISPONIBLE</div>"

                $('#espaciosContainer').append(`
                    <div class="espacios__card" data-aos="fade-up" onclick="cardClick(this)" 
                    data-id="${json[i].idcat_proyectos}" data-titulo="${json[i].nombre2}">
                    <div class="espacios__card-header">
                    <img src="admin/${json[i].img_principal}" alt="proyecto">
                    </div>  
                    <div class="espacios__card-body">
                    <p>${json[i].nombre}</p>
                    <p class="espacios__card-title">${json[i].nombre2}</p>
                    <p><i class="fa-solid fa-location-dot"></i> ${json[i].ubicacion}</p>
                    ${m2}${m2_oficinas}
                    ${status}
                    </div>  
                    </div>
                    `
                    )
            }
        },
        error : function(e){
            console.log(e.responseText);
        },
        complete : function(){

            modal2 = new Menu({options: {element: '.modal', openWith: '.espacios__card', closeWith: '#modalButtonCerrar', size:'lg', from: 'right', 
                warns: false,
                callbackOnOpen: function(){
                    var urlPost = 'admin/bd/Proyectos/index.php';
                    $.ajax({
                        type : 'POST',
                        data : { funcion : 'cargarProyecto', idcat_proyectos : modalId },
                        url : urlPost,
                        success : function(response){
                            proyecto = JSON.parse(response.trim());
                            $("#ubicacionModal").html(proyecto[0].ubicacion);

                            var listDatos = JSON.parse($.ajax({
                                type : 'POST',
                                url : urlPost,
                                async : false,
                                data : { funcion : 'obtenerDatosTecnicos', idcat_proyectos : modalId },
                            }).responseText);

                            $("#listDatos").html(null);
                            for (var i = 0; i < listDatos.length; i++) {
                                $("#listDatos").append(`<li>${listDatos[i].descripcion}</li>`);
                            }

                            var listServicios = JSON.parse($.ajax({
                                type : 'POST',
                                url : urlPost,
                                async : false,
                                data : { funcion : 'obtenerCaracteristicas', idcat_proyectos : modalId },
                            }).responseText);

                            $("#listCaracteristicas").html(null);
                            for (var i = 0; i < listServicios.length; i++) {
                                $("#listCaracteristicas").append(`<li>${listServicios[i].descripcion}</li>`);
                            }

                            var galeria = JSON.parse($.ajax({
                                type : 'POST',
                                url : urlPost,
                                async : false,
                                data : { funcion : 'cargarGaleriaProyecto', idcat_proyectos : modalId },
                            }).responseText);

                            $("#SwiperGallery").html(`<div class="swiper-slide slide_1">
                                <img src="admin/${proyecto[0].img_principal}" alt="" loading="lazy">
                                </div>`).fadeIn();

                            for (var i = 0; i < galeria.length; i++) {
                                $("#SwiperGallery").append(`<div class="swiper-slide slide_1">
                                    <img src="admin/${galeria[i].ruta}" alt="" loading="lazy">
                                    </div>`);
                            }
                        },
                        error : function(e){
                            console.log(e.responseText);
                        },
                        complete : function(){
                            $('#modal__title').text(modalTitle).fadeIn();
                            $('body').css('overflow', 'hidden')
                        }
                    });
                },
                callbackOnClose: function(){
                    $("#listDatos").html(null);
                    $("#listCaracteristicas").html(null);
                    $("#SwiperGallery").html(null)
                    $('body').css('overflow', 'auto')
                } 
            }})
            modal2.init()
        }
    });
}
