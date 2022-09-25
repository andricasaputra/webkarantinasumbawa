let acc = document.getElementsByClassName("accordion");
let i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
timer = setTimeout(function() {
    $('#show').removeClass('hide');
    $('.marquee .text').marquee({
        duration: 20000,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
        pauseOnHover: true
    });
}, 1000);
$('.prev').on('click', function(e) {
    e.preventDefault();
    $(this).css("display", "block");
    $('.has-sub').toggleClass('toggle-menu');
    $('.dropdown-item').on('click', function() {
        $(this).css("display", "block");
    }); /*$('.last').css({'display' : 'block'});*/
});
$(document).on("click", '#pengaduan', function() {
    $(this).animate({
        'marginLeft': "-360px"
    }, 400);
    $(this).addClass('balik');
});
$(document).on("click", ".balik", function() {
    $(this).animate({
        'marginLeft': "0px"
    }, 400);
    $('#pengaduan').removeClass('balik');
});

$(document).on('click', '.has-sub', function() {
    $(this).toggleClass('toggle-menu');
    $('.toggle-menu').find('.no-sub li a').css("display", "block");
    $(document).on('click', '.toggle-menu', function() {
        $(this).find('.no-sub li a').css("display", "none");
    });
});