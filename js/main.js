const nav = document.querySelectorAll("nav")[0];
console.log(nav.classList);

const hamb = () => {
  this.addEventListener("click", () => {
    nav.classList = "block" ? "none" : 'block';
    console.log(nav.classList);
  });
};
