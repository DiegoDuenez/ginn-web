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
    const buttonPressed = e => {
        modalTitle = $(e.target).attr('data-titulo');  
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
            $('body').css('overflow', 'hidden')
            $('#modal__title').text(modalTitle)
           
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
