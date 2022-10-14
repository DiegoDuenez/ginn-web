<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/glider/glider.min.js"></script>
<script src="libs/aos/dist/aos.js"></script>
<script src="libs/sweetalert2/sweetalert2.all.min.js"></script>     
<script src="libs/menu/js/menu.min.js"></script>
<script src="js/banner.js"></script>     
<script>

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

    modal = new Menu({options: {element: '.modal', openWith: 'h2', closeWith: 'h3', size:'lg', from: 'right', 
        callbackOnOpen: function(){
            $('body').css('overflow', 'hidden')
        },
        callbackOnClose: function(){
            $('body').css('overflow', 'auto')
        } 
    }})
    modal.init()


    AOS.init();
</script>
<script src="js/index.js"></script>     
