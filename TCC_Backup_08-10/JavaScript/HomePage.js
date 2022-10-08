$(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
      $('#navbar').addClass('shrink');

      $('#Secondnavbar').addClass('slideOutUp');
      $('#Secondnavbar').addClass('disappear');

    } else {
      $('#navbar').removeClass('shrink');
      $('#Secondnavbar').removeClass('slideOutUp');
      $('#Secondnavbar').removeClass('disappear');
    }

    /*window.onscroll = function() {myFunction()};

    var NavBar = document.getElementById("navbar");

    var sticky = NavBar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        NavBar.classList.add("sticky");
      } else {
        NavBar.classList.remove("sticky");
      }
    }*/
});

$(document).ready(function(){
  $('.Teste_Carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
  })
});

$(document).ready(function(){
  $('.Colecoes_Carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
  })
});
