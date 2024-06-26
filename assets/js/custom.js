//***** Sticky Header JS Start Here *****//
// window.addEventListener("scroll", function () {
//   var header = document.querySelector("header");
//   header.classList.toggle("sticky", window.scrollY > 50);
// });
//***** Sticky Header JS End Here *****//

//***** Lazy load JS Start Here *****//
// var isloading = true;
// function removeLoading() {
//   if (isloading) {
//     $("head").append(`
//             <link rel="stylesheet preload" as="style" href="assets/css/custom.css">`);
//     $(".myLazy").each(function () {
//       $(this).attr("src", $(this).attr("data-src"));
//     });

//     isloading = false;
//   }
// }
// $(document).ready(
//   setTimeout(() => {
//     removeLoading;
//   }, 1000)
// );
//***** Lazy load JS End Here *****//

//*****  Award Brands Slider JS Start Here *****//
$('.award-brands-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Award Brands Slider JS End Here *****//

//*****  Service Offer Slider JS Start Here *****//
$('.service-offer-slider').slick({
  dots: false,
  arrow:true,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Service Offer Slider JS End Here *****//

//**** Testimonials Author Slider JS Start Here ****//
$('.testi-auth-content-main').slick({
  dots: false,
  arrow: true,
  infinite: true,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  asNavFor: '.testi-auth-image-main',
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
$('.testi-auth-image-main').slick({
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.testi-auth-content-main',
  focusOnSelect: true,
});
//**** Testimonials Author Slider JS End Here ****//

//***** Popup And Flaot Buttons JS Start Here *****//
// $(window).ready(function () {
//     setTimeout(function () {
//         $("#staticBackdrop").modal("show");
//     }, 5000);
// }),

// $(".float-form-clickbtn").click(function () {
//   $(".float-side-form").toggleClass("active");
// });
//***** Popup And Flaot Buttons JS End Here *****//






