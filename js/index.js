
$("#navbar__button").click(function(e){

    $(this).empty()
    $(this).append(`
        <i class="fa-solid fa-xmark"></i>
    `)

    if($(".navbar__links").hasClass('open')){
       
        $(".navbar__links").fadeOut("fast", function(){
            $(this).removeClass('open')
        })

        $(this).empty()
        $(this).append(`
            <i class="fa-solid fa-bars"></i>
        `).hide()
        .fadeIn('slow')
    }
    else{

        
        $(".navbar__links").addClass('open').hide().fadeIn("slow");
    }
    
})

var lastScrollTop = 0
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || this.document.documentElement.scrollTop
    if (scrollTop > "20" ) {
        $('.navbar').css('height', '5rem')
        $('.navbar').css('padding', '0rem 2rem')
        $('.navbar').css('background-color', '#323031')

    }
    else {
        $('.navbar').css('height', '8rem')
        $('.navbar').css('padding', '1rem 4rem')
        $('.navbar').css('background-color', 'transparent')


    }

    lastScrollTop = scrollTop
})

