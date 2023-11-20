const nav = document.querySelector('nav')
const hambToggle = () => {
  const hamb = document.querySelector('.menu')
  hamb.addEventListener('click', () => {
    if(hamb.textContent === "menu"){
      hamb.textContent = "close"
      nav.style.display = "flex"
    } else {
      hamb.textContent = "menu"
      nav.style.display = "none"
    }
  })
  const ul = document.querySelectorAll('li')
  ul.forEach(ele => {
    ele.addEventListener('click', () => {
      hamb.textContent = "menu"
      nav.style.display = "none"
    })
  })
  
}; hambToggle();
