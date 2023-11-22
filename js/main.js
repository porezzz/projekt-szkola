const nav = document.querySelector("nav");
const Anim = (hamb, nav, state) => {
  if (state === "Out") {
    hamb.style.display = "none";
    nav.classList.add("animNavRev");
    setTimeout(() => {
      nav.style.top = "-1000px";
      nav.classList.remove("animNavRev");
      hamb.textContent = "menu";
      hamb.style.display = "block";
    }, 450);
  } else if (state === "In") {
    hamb.style.display = "none";
    nav.classList.add("animNav");
    setTimeout(() => {
      nav.style.top = "0px";
      nav.classList.remove("animNav");
      hamb.textContent = "close";
      hamb.style.display = "block";
    }, 450);
  }
};
const hambToggle = () => {
  const hamb = document.querySelector(".menu");
  hamb.addEventListener("click", () => {
    if (hamb.textContent === "menu") {
      Anim(hamb, nav, "In");
    } else {
      Anim(hamb, nav, "Out");
    }
  });
  const ul = document.querySelectorAll("li");
  ul.forEach((ele) => {
    ele.addEventListener("click", () => {
      Anim(hamb, nav, "Out");
    });
  });
};
hambToggle();
