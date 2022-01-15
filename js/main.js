  $('.hamburger').click(function(e){
    $(this).toggleClass('open');
    $('.main-nav').toggleClass('show');

  })


    if($('body').hasClass('home')){

    var $window = $(window),
      flexslider = { vars:{} };


  // tiny helper function to add breakpoints
  function getGridSize() {
    console.log(screen.width);
    return (screen.width < 600) ? 2 :
           (screen.width < 900) ? 3 : 4;
  
  }




  // $window.resize(function() {
  //   var gridSize = getGridSize();
 
  //   flexslider.vars.minItems = gridSize;
  //   flexslider.vars.maxItems = gridSize;
  // });

//   $('.tm-slider').flexslider({
//     animation:"slide",
//     namespace:"tm-product-",
//     // touch:false,
//     // controlNav:true
// })

  $('.featured-product-slider .woocommerce.columns-4').flexslider({

    animation: "slide",
    animationLoop: false,
    itemWidth: 110,
    itemMargin: 20,
    selector:".slides > li",
    minItems:getGridSize(),
    maxItems:getGridSize(),
    // controlNav:false
    });


$('.featured-product-slider .slides').flexslider("pause");
// $('.latest-product-slider .woocommerce.columns-4').flexslider("pause");

    }
