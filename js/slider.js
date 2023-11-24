const carousel = document.querySelector(".carousel");
const buttonLeft = document.querySelector("#btn1");
const buttonRight = document.querySelector("#btn2");
let x = 0;
buttonLeft.addEventListener("click", () => {
  if (x >= 0) {
    carousel.style.left = `-${1290}px`;
    x = -1290;
  } else {
    carousel.style.left = `${x + 430}px`;
    x += 430;
  }
});
buttonRight.addEventListener("click", () => {
  if (x <= -1290) {
    carousel.style.left = `${0}px`;
    x = 0;
  } else {
    carousel.style.left = `${x - 430}px`;
    x -= 430;
  }
});
