$(".slider").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: true,
    pauseOnFocus: true,
    dots: true,
    responsive: [{ 
        breakpoint: 100,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2
        } 
    }]
});
