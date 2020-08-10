/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */
function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}
$(document).ready(function(){
  var $offs = $("#openPOPUP").offset().top + 50

  $(".slider").slick({
    initialSlide: 0,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1000,
    centerMode: true,
    variableWidth: true
  });
  $('#nav').onePageNav({
    currentClass: 'current',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
  });
  $("#openPOPUP").click(function(event) {
    if ($(window).scrollTop() < $offs) {
      document.getElementById("popup-1").classList.toggle("active");
    }  else {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        document.getElementById("popup-1").classList.toggle("active");
    }
  });
  var $menu = $("#menu");
       
  $(window).scroll(function(){
      if ( $(this).scrollTop() > 100 && $menu.hasClass("btn_container") ){
          $menu.fadeOut('fast',function(){
              $(this).removeClass("btn_container")
                     .addClass("btn_fixed")
                     .fadeIn('fast');
          });
      } else if($(this).scrollTop() <= 100 && $menu.hasClass("btn_fixed")) {
          $menu.fadeOut('fast',function(){
              $(this).removeClass("btn_fixed")
                     .addClass("btn_container")
                     .fadeIn('fast');
          });
      }
  }); 

  $(".projects_right .project_detail").hide()
  $(".projects_right .project_detail:first-child").show()
  $(".tapPr").click(function() {

    var openingTab = $(this).attr("data-filter");

    $("ul li").removeClass("activeProject");
    $(this).addClass("activeProject");

    $(".projects_right .project_detail").hide();
    $("#" + openingTab).show();
  });
  $('#top_thank').delay(3000).fadeOut(400);
});


particlesJS('section2', {
  "particles": {
    "number": {
      "value": 70,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#000"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 4
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.92096177558569666,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 6,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 115,
      "color": "#193737",
      "opacity": 0.8730051359138169,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2.0170362019291,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
var section_main_classes = document.getElementById('section_main').classList;
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  section_main_classes.add("section_main_height_mobile");
} else {
  section_main_classes.add("section_main_height_full");
}
// new fullpage("#fullPage", {
//   anchors: ['sec1', 'sec2', 'sec3', 'sec4'],
//   scrollingSpeed: 700,
//   scrollBar: false
// });