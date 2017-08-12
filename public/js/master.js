bg_com = {

    init: function(){
        this.gallery();
        this.slider();
    },

    gallery: function(){

        (function($) {

            $("#gallery").justifiedGallery({
                waitThumbnailsLoad:false
            })
            .on('jg.complete', function () {
                $('#gallery a').swipebox();
            });

        })( jQuery );

    },

    slider: function(){
      (function($) {

          $('#portfolio .project-slider').slick({
            infinite: true,
            dots: true
          });

          $('#portfolio .swipebox').swipebox({
            hideBarsDelay :-1, // delay before hiding bars on desktop
          });

      })( jQuery );


    }


}

if(bg_com){
    bg_com.init();
}
