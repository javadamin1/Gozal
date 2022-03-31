jQuery(function ($) {
    $(".hamburger__button").click(function(){
        $(this).toggleClass("toggled");
        $(".menu").toggleClass("menu-drop");
        $("section").toggleClass("blur");
      });
      $("section").click(function(){
        $(".hamburger__button").removeClass("toggled");
        $(".menu").removeClass("menu-drop");
        $(this).removeClass("blur");
      });



});
