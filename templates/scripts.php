<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/glider/glider.min.js"></script>
<script src="libs/aos/dist/aos.js"></script>
<script src="libs/sweetalert2/sweetalert2.all.min.js"></script>     
<script src="libs/menu/js/menu.min.js"></script>
<script src="js/banner.js"></script>     
<script src="js/index.js"></script>     


<script>
    Menu = new Menu({options: {element: '.menu', openWith: '.navbar__button', closeWith: '.menu__button', size:'20rem', from: 'right'}})
    Menu.init();
    console.log(Menu.isOpen)
    AOS.init();
</script>