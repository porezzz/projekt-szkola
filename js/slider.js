const carousel = document.querySelector(".carousel");
const buttonLeft = document.querySelector("#btn1");
const buttonRight = document.querySelector("#btn2");
let x = 0;
const changeX = (ammount) => {
    carousel.style.left = `${ammount}px`;
    x = ammount;
}
buttonLeft.addEventListener("click", () => {
  if (x >= 0) {
    changeX(-3010);
  } else {
    changeX(x+430)
  }
});
buttonRight.addEventListener("click", () => {
  if (x <= -3010) {
    changeX(0)
  } else {
    changeX(x-430)
  }
});
