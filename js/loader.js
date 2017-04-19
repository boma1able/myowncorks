document.body.onload = function(){

    setTimeout(function(){

        var preloader = document.getElementById('page-preloader');
        if( !preloader.classList.contains( 'done' ) ){
            preloader.classList.add( 'done' );
        $('body').addClass('animated fadeIn');
        $('img').addClass('animated fadeIn');
        $('.logo, .h5-3, .sub-h5').addClass('animated zoomIn');
        $('.logo-p, .p-3, .sub-p, .form').addClass('animated fadeIn');
        }
    }, 1500);
  

}