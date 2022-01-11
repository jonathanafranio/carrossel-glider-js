var gliders = document.querySelectorAll('.glider');
if(gliders.length) {
    for (var i = 0; i < gliders.length; i++) {
        var id = gliders[i].getAttribute('id');
        
        gliderSlide(id);
    }
}
function gliderSlide(gliderId) {
    var deskTopShow = +document.getElementById(gliderId).getAttribute('data-desktop-show');
    var lapTopShow = +document.getElementById(gliderId).getAttribute('data-laptop-show');
    var tabletShow = +document.getElementById(gliderId).getAttribute('data-tablet-show');
    var mobileShow = +document.getElementById(gliderId).getAttribute('data-mobile-show');
    var dots = document.getElementById(gliderId).getAttribute('data-dots');
    var arrows = document.getElementById(gliderId).getAttribute('data-arrows');
    var infinit = document.getElementById(gliderId).getAttribute('data-infinit');


    var objArrows = {
        prev: `#glider-prev-${gliderId}`,
        next: `#glider-next-${gliderId}`
    };

    new Glider(document.getElementById(`${gliderId}`), {
        // Mobile-first defaults
        slidesToShow: mobileShow,
        slidesToScroll: 1,
        //draggable: true,
        rewind: infinit,
        dots: dots == 'true' ? `#dots-${gliderId}` : ``,
        arrows: arrows == 'true' ?  objArrows : '',
        responsive: [
            {
                // screens greater than >= 768px
                breakpoint: 768,
                settings: {
                    slidesToShow: tabletShow,
                    slidesToScroll: 1,
                }
            },
            {
                /* screens greater than >= 1024px*/
                breakpoint: 1024,
                settings: {
                    slidesToShow: lapTopShow,
                    slidesToScroll: 1,
                }
            },
            {
                /* screens greater than >= 1200px*/
                breakpoint: 1200,
                settings: {
                    slidesToShow: deskTopShow,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    document.getElementById(gliderId).classList.add('-is-loaded');
}