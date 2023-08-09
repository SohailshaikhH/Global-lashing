
 
   $(document).ready(function() {
    // Scroll-to-Target
    $(".scroll-to-target").on("click", function() {
      var target = $(this).attr("data-target");
      $("html, body").animate({
        scrollTop: $(target).offset().top
      }, 10000);
    });

    // WOW Animation
    new WOW().init();

    // Fact Counter Animation
    $(window).on("scroll", function() {
      if ($(".counter-numbers:not(.counted)").length) {
        $(".counter-numbers:not(.counted)").each(function() {
          var counter = $(this);
          var targetCount = parseInt(counter.attr("data-count"), 10);
          var speed = 4000; // Adjust the speed as per your preference

          $({ countNum: 0 }).animate({ countNum: targetCount }, {
            duration: speed,
            easing: "linear",
            step: function() {
              counter.text(Math.floor(this.countNum));
            },
            complete: function() {
              counter.text(this.countNum);
              counter.addClass("counted");
            }
          });
        });
      }
    });
  });

