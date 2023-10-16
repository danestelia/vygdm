import './bootstrap';


/* ====== Mis scripts ====== */



const botonMenu = document.getElementById('boton-menu')
const navMenu = document.getElementById('nav-menu')
const barMenu = document.getElementById('bar-menu')
const imgLogo = document.getElementById('img-logo')

if (window.location.pathname !== '/') {
  barMenu.style.display = 'block'
  imgLogo.style.opacity = '1'
}

const actionNavMenu = () => {
  let estado = window.getComputedStyle(navMenu).display
  if (estado === 'none') {
    navMenu.style.display = 'flex'
    navMenu.classList.add('uk-animation-slide-bottom')
  }else {
    navMenu.style.display = 'none'
    navMenu.classList.add('uk-animation-slide-top')
  }
}

botonMenu.addEventListener('click', () => {
  actionNavMenu();
});

