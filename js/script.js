$(document).ready(function () {
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $(".header").outerHeight();
  $(window).scroll(function (event) {
    didScroll = true;
  });
  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);
  function hasScrolled() {
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta) return;
    if (st > lastScrollTop && st > navbarHeight) {
      $("header").removeClass("header-down").addClass("header-up");
    } else {
      if (st + $(window).height() < $(document).height()) {
        $("header").removeClass("header-up").addClass("header-down");
      }
    }
    lastScrollTop = st;
  }
  resizeDiv();
  $(".rotate").textrotator({
    animation: "flipUp",
    separator: ",",
    speed: 3000,
  });
});
function navbartoggle() {
  $(".nav-menu-wrapper").toggleClass("open");
  $("body").toggleClass("noScroll");
  $(this).toggleClass("active");
}
$("[data-max_width]").each(function () {
  $(this).css({
    "max-width": $(this).attr("data-max_width") + "px",
  });
});

window.onresize = function (event) {
  resizeDiv();
};
$(function () {
  $(window).scroll(resizeDiv);
  resizeDiv();
});
function resizeDiv() {
  headerspaceheight = $(".header").innerHeight();
  $(".header-spaceheight").css({
    height: headerspaceheight + "px",
  });
}
