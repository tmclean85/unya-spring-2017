(function($) {
  $(function () {

    // sidebar positioning
    var $bottomOfHeader = $('.header-wrapper').offset().top + $('.header-wrapper').height();
    var $sidebarMenu = $('#secondary .menu-primary-menu-container');
    var $sidebarArea = $('.sidebar-nav-menu');

    $sidebarMenu.css('top', $bottomOfHeader);

    function fixSidebar(position) {
      if (position > $bottomOfHeader) {
        $sidebarMenu.addClass('fixed-sidebar');
      } else {
        $sidebarMenu.removeClass('fixed-sidebar');
      }
    }

    $(document).scroll(function() {
      var $position = $(this).scrollTop();
      
      if ($sidebarArea.length) {
        fixSidebar($position);
      }

    });

    });

})(jQuery);