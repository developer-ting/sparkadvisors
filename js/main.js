AOS.init({
  duration: 1200,
});
var equalHeight = function (target) {
  var setHeight = 0;
  $(target).each(function () {
    var getH = $(this).outerHeight();
    if (setHeight < getH) {
      setHeight = getH;
    }
  });
  $(target).outerHeight(setHeight);
};
$(document).ready(function () {
  $(".dots").click(function () {
    //        $(".popup_menu").toggleClass("hide_show_popup_menu");
    $(".popup_menu_dropdown").toggleClass("hide_show_popup_menu_drop");
  });

  var winW = $(window).outerWidth();
  if (winW < 992) {
    $(".dropdown-content").hide(); //this hides the list initially

    $(".dropbtn").click(function () {
      $(this).next(".dropdown-content").slideToggle("slow");
    });
  }

  $(".popup_menu_dropdown").click(function () {
    $(this).toggleClass("hide_show_popup_menu_drop");
  });

  $(".icon").click(function () {
    $(this).toggleClass("open");
    $(".sidenav").toggleClass("sidenav_show");
  });

  $(".header_hidden").click(function () {
    $(".icon").removeClass("open");
    $(".sidenav").removeClass("sidenav_show");
  });
  $(".dots_menu_section").hover(function () {
    $(".dots_menu_drop_down").toggleClass("drop_down_visible_hidden");
  });
  $(".dots_menu_section").click(function () {
    $(".dots_menu_drop_down_mobile").toggleClass("drop_down_visible_hidden");
  });
  $(".dots_menu_section_c").click(function () {
    $(".dots_menu_drop_down_mobile_c").toggleClass("drop_down_visible_hidden");
  });
});

$(window).on("load", function () {
  setTimeout(function () {
    $(".loader_overlay").hide();
  }, 0);
});

$(window).on("load", function () {
  var winW = $(window).outerWidth();
  if (winW > 767) {
    equalHeight(".product_box");
  }
  if (winW > 992) {
    equalHeight(".profile_eq_hight");
  }
});

$(".offer_slider").slick({
  infinite: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  fade: false,
  infinite: true,
  pauseOnHover: false,
  cssEase: "ease-in-out",
  responsive: [
    {
      breakpoint: 767,
      settings: {
        pauseOnFocus: false,
      },
    },
  ],
});

$.validator.addMethod("lettersonly", function (value, element) {
  return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
});

//for email only
$.validator.addMethod("emailtest", function (value, element) {
  return (
    this.optional(element) ||
    /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value)
  );
});

$(document).ready(function () {
  //you have to use keyup, because keydown will not catch the currently entered value
  $("input[type=password]")
    .keyup(function () {
      // set password variable
      var pswd = $(this).val();

      //validate the length
      //        if (pswd.length < 8) {
      //            $('#length').removeClass('valid').addClass('invalid');
      //        } else {
      //            $('#length').removeClass('invalid').addClass('valid');
      //        }

      //validate letter
      if (pswd.match(/[A-z]/)) {
        $("#letter").removeClass("invalid").addClass("valid");
      } else {
        $("#letter").removeClass("valid").addClass("invalid");
      }

      //validate uppercase letter
      if (pswd.match(/[0-9]/)) {
        $("#number").removeClass("invalid").addClass("valid");
      } else {
        $("#number").removeClass("valid").addClass("invalid");
      }

      //validate number
      //        if (pswd.match(/\d/)) {
      if (pswd.match(/[~,`,!,@,#,$,%,^,|,<,>]/)) {
        $("#capital").removeClass("invalid").addClass("valid");
      } else {
        $("#capital").removeClass("valid").addClass("invalid");
      }
    })
    .focus(function () {
      $("#pswd_info").show();
    })
    .blur(function () {
      $("#pswd_info").hide();
    });
});
