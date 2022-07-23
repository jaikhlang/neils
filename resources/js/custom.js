
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".fixed-top");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
          console.log(scroll + 'triggered');
            header.removeClass('native-navbar bg-orange').addClass("bg-white border-bottom border-light");
        } else {
            header.removeClass("bg-white border-bottom border-light").addClass('native-navbar bg-orange');
        }
    });
});

function displayWindowSize(){
  var header = $(".navbar");
  var breakpoint = document.documentElement.clientWidth;
  // var breakpoint = document.getElementById("result").innerHTML = "Width: " + w;
  window.addEventListener("resize", displayWindowSize);
  if(breakpoint < 568){
    header.removeClass('native-navbar bg-orange fixed-top').addClass("bg-white border-bottom border-light");
  }else{

  }
}

displayWindowSize();

$('.map-container')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});

// const slider = document.querySelector('.requireScroll');
// const nextSlider = document.querySelector('.nextScroll');
// let isDown = false;
// let startX;
// let scrollLeft;
//
// slider.addEventListener('mousedown', (e) => {
//   isDown = true;
//   slider.classList.add('grabbed');
//   startX = e.pageX - slider.offsetLeft;
//   scrollLeft = slider.scrollLeft;
// });
// slider.addEventListener('mouseleave', () => {
//   isDown = false;
//   slider.classList.remove('grabbed');
// });
// slider.addEventListener('mouseup', () => {
//   isDown = false;
//   slider.classList.remove('active');
// });
// slider.addEventListener('mousemove', (e) => {
//   if(!isDown) return;
//   e.preventDefault();
//   const x = e.pageX - slider.offsetLeft;
//   const walk = (x - startX) * 3; //scroll-fast
//   slider.scrollLeft = scrollLeft - walk;
//   console.log(walk);
// });
//
// nextSlider.addEventListener('click', (e) => {
//   slider.scrollBy(1200, 0);
//
// });
