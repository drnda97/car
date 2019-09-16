window.addEventListener('load', (e) => {
  var hamburger = document.querySelector('.hamburger');
  var hidden_nav = document.querySelector('.nav_wrapper');
  var close = document.querySelector('.close');
  hamburger.addEventListener('click', (e) => {
    hidden_nav.style.top = 0;
  });

  close.addEventListener('click', (e) => {
    hidden_nav.style.top = '-200vh';
  });
});
