"use strict";
(function ($) {
  // ==========================================
  //      Start Document Ready function
  // ==========================================
  $(document).ready(function () {
    //============================ Scroll To Top Icon Js Start =========
    (() => {
      const btn = $(".scroll-top");
      $(window).on("scroll", function () {
        if ($(window).scrollTop() >= 100) {
          $(".header").addClass("fixed-header");
          btn.addClass("show");
        } else {
          $(".header").removeClass("fixed-header");
          btn.removeClass("show");
        }
      });

      btn.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate(
          {
            scrollTop: 0,
          },
          "300"
        );
      });
    })();

    // ========================== Add Attribute For Bg Image Js Start =====================
    $(".bg-img").css("background-image", function () {
      return `url(${$(this).data("background-image")})`;
    });
    // ========================== Add Attribute For Bg Image Js End =====================

    // ================== Password Show Hide Js Start ==========
    $(".toggle-password").on("click", function () {
      $(this).toggleClass("fa-eye");
      var input = $($(this).attr("id"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });

    // ================== Sidebar Menu Js Start ===============
    // Sidebar Dropdown Menu Start
    $(".has-dropdown > a").click(function () {
      $(".sidebar-submenu").slideUp(200);
      if ($(this).parent().hasClass("active")) {
        $(".has-dropdown").removeClass("active");
        $(this).parent().removeClass("active");
      } else {
        $(".has-dropdown").removeClass("active");
        $(this).next(".sidebar-submenu").slideDown(200);
        $(this).parent().addClass("active");
      }
    });

    if ($(".has-dropdown").hasClass("active")) {
      $(".has-dropdown.active").find(".sidebar-submenu").slideDown();
    }
    // Sidebar Dropdown Menu End

    // Sidebar Icon & Overlay js
    $(".navigation-bar").on("click", function () {
      $(".sidebar-menu").addClass("show-sidebar");
      $(".sidebar-overlay").addClass("show");
    });

    $(".sidebar-menu__close, .sidebar-overlay").on("click", function () {
      $(".sidebar-menu").removeClass("show-sidebar");
      $(".sidebar-overlay").removeClass("show");
    });

    // Sidebar Icon & Overlay js
    // ===================== Sidebar Menu Js End =================

    //Plugin Customization Start
    // ========================= Select2 Js Start ==============
    (() => {
      $(".select2").each((index, select) => {
        $(select).select2();
      });

      $(".select2-modal").each(function (index, element) {
        $(element).select2({
          dropdownParent: $(element).closest(".modal"),
        });
      });

      // select2 with image
      function formatState(state) {
        if (!state.id) {
          return state.text;
        }
        var $state = $(
          '<span class="img-flag-inner"><img src="' +
          $(state.element).attr("data-src") +
          '" class="img-flag" /> ' +
          state.text +
          "</span>"
        );
        return $state;
      }
      $(".img-select2").select2({
        templateResult: formatState,
        templateSelection: formatState,
      });
    })();

    // ========================= Select2 Js End ==============

    // ========================= Slick Slider Js Start ==============
    (() => {
      const sliderConfig = {
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: true,
        pauseOnHover: true,
        arrows: false,
        prevArrow:
          '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow:
          '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
      };
      if ($(".client-slider").length > 0) {
        $(".client-slider").slick({
          ...sliderConfig,
          dots: false,
          variableWidth: true,

          responsive: [
            {
              breakpoint: 1199,
              settings: {
                arrows: false,
                slidesToShow: 2,
                dots: true,
              },
            },
            {
              breakpoint: 991,
              settings: {
                arrows: false,
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 464,
              settings: {
                arrows: false,
                slidesToShow: 1,
              },
            },
          ],
        });
      }
      if ($(".testimonial-slider").length > 0) {
        $(".testimonial-slider").slick({
          ...sliderConfig,
          slidesToShow: 3,
          dots: true,
          speed: 500,

          responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
              },
            },
          ],
        });
      }

      if ($(".investor-slider").length > 0) {
        $(function (e) {
          $(".investor-slider").slick({
            ...sliderConfig,
            slidesToShow: 4,
            dots: false,
            arrows: true,
            speed: 500,
            appendArrows: e(".slider-arrow"),
            prevArrow:
              '<button type="button" class="slick-prev"><i class="las la-arrow-left"></i></button>',
            nextArrow:
              '<button type="button" class="slick-next"><i class="las la-arrow-right"></i></button>',

            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                },
              },
              {
                breakpoint: 425,
                settings: {
                  slidesToShow: 1,
                },
              },
            ],
          });
        });
      }
    })();
    // ========================= Slick Slider Js End ===================

    // ========================= Odometer Counter Up Js End ==========
    $(".counter-item").each(function () {
      $(this).isInViewport(function (status) {
        if (status === "entered") {
          for (
            var i = 0;
            i < document.querySelectorAll(".odometer").length;
            i++
          ) {
            var el = document.querySelectorAll(".odometer")[i];
            el.innerHTML = el.getAttribute("data-odometer-final");
          }
        }
      });
    });
    // ========================= Odometer Up Counter Js End =====================

    // calculate height
    function setHeight(hvar, idname) {
      let headerSelect = document.getElementsByClassName(`${idname}`)[0];
      if (headerSelect) {
        let headerHeight = headerSelect.clientHeight;
        document.documentElement.style.setProperty(
          `${hvar}`,
          `${headerHeight}px`
        );
      }
    }

    setHeight("--header-h", "header");
    setHeight("--dh-h", "dashboard-header");

    // tooltips
    const tooltipTriggerList = document.querySelectorAll(
      '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
      (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );

    // light case
    $("a[data-rel^=lightcase]").lightcase();

    // date picker
    $(".datepicker2").flatpickr({
      dateFormat: "Y-m-d",
    });

    $(".datepickerappoint").flatpickr({
      dateFormat: "Y-m-d",
      inline: true,
    });

    $(".timepicker2").flatpickr({
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      time_24hr: true,
    });
  });

  // ==========================================
  //      End Document Ready function
  // ==========================================

  // ========================= Preloader Js Start =====================
  $(window).on("load", function () {
    $(".preloader").fadeOut();
  });
  // ========================= Preloader Js End=====================
})(jQuery);
