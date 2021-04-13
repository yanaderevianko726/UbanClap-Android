$(document).ready(function () {
    $(".toggler").on("click", function () {
        $(".menu-container").toggleClass("active");
    });
    $(".nav-toggler").on("click", function () {
        $(".navbar-toggler").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });

    function setMenuHeight() {
        var navbarHeight = $(".navbar").outerHeight();
        $(".menu-wrapper")
        //.niceScroll({
          //      emulatetouch: true,
                //preventmultitouchscrolling: false, 
          //  })
            .outerHeight(document.documentElement.clientHeight - navbarHeight);
    }
    setMenuHeight();
    $(window).on("resize", function () {
        setMenuHeight();
    });
});
var elem = document.querySelector('.js-switch');
var init = new Switchery(elem);


    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      $notification = $delete.parentNode;
  
      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);

      });
    });