function toggleMenu(){
  let menuToggleInput = document.getElementById('menuToggleInput');
  let menu = document.getElementById('menu');
  if(menuToggleInput.checked){
    menu.classList.add('active');
  }
  else{
    menu.classList.remove('active');
  }
}

function closeMenu(){
  let menuToggleInput = document.getElementById('menuToggleInput');
  let menu = document.getElementById('menu');
  menu.classList.remove('active');
  menuToggleInput.checked = false;
}
