bg_com = {

    init: function(){
        this.gallery();
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

    }

}

if(bg_com){
    bg_com.init();
}
