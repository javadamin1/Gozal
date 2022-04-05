jQuery(function ($) {
  //drop menu
  $(".hamburger__button").click(function () {
    $(this).toggleClass("toggled");
    $(".menu").toggleClass("menu-drop");
    $("section").toggleClass("blur");
  });
  // remove menu and blur onclick section
  $("section").click(function () {
    $(".hamburger__button").removeClass("toggled");
    $(".menu").removeClass("menu-drop");
    $(this).removeClass("blur");
  });

  //ajax load more post botton
  $(".load-more-btn").on("click", function () {

    var ajax_url = siteConfig?.ajaxUrl ?? '';
   var  ajaxNonce = siteConfig?.ajax_nonce ?? '';
    var that = $(this);
    var page = that.data("page");
    var newpage = page+1;

    $.ajax({
      url: ajax_url,
      type : 'post',
      data: {
        page: page,
        action: 'load_more',
        ajax_nonce: ajaxNonce,
      },
      error: function (response) {
        console.log('de'+response);
      },
      success: function (response) {
        console.log('su'+response);
        that.data('page',newpage);
        $(".load").append(response);
        
      },
    });
  });
});
