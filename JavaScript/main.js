// automatic slideshow
// This code is inspired by an example found at https://www.w3schools.com/howto/howto_js_slideshow.as

var index = 1;
slideControler1(index);
autoSlider();

function slidesControler(value) {
  slideControler1(index += value)
}


function slideControler1(value) {
  var i;
  var slides = document.getElementsByClassName("autoslider");

  if (value < 1) {
    index = slides.length
  }
  
  if (value > slides.length) {
    index = 1
  }

  // iterate the length of slide and display as none
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  // show the silde 
  slides[index-1].style.display = "block";
}


function autoSlider() {
  var i;
  var slides = document.getElementsByClassName("autoslider");
  var time = 4500;

  // iterate the length of slide and display as none
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  index++;

  // when the index of slide larger than the total number slides set the index as 1 which equal to 
  // the first slide
  if (index > slides.length) {
    index = 1
  }

  // show the silde 
  slides[index-1].style.display = "block";

  setTimeout(autoSlider, time); // duration of slide change
}