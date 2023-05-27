let currentSlide = 0;

function startSlider() {
  let imageCount = document.querySelectorAll(".imgs");
  if (imageCount.length === 0) {
    imageCount = document.querySelectorAll(".imgs");
    images.style.transform = `translateX(0px)`;
    return;
  }
 
  let images = document.querySelector(".slider ul");
  images.style.transform = `translateX(-${currentSlide * 450}px)`;

  if (currentSlide === imageCount.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
  
}

setInterval(() => {
  startSlider();
}, 5000);
