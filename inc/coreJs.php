let changed = false;
function menuSwitch(x) {
  x.classList.toggle('change');
  if (changed === false) {
  	document.getElementById("menuToggle").style.display= "block";
  	document.getElementById("hide").style.display= "none";
  	document.getElementById("foot").style.display= "none";
  	changed = true;
  } else  {
  	document.getElementById("menuToggle").style.display= "none";
  	document.getElementById("hide").style.display= "block";
  	document.getElementById("foot").style.display= "flex";
  	changed = false;
  }
}

(() => {
  'use strict';
  // Page is loaded
  const objects = document.getElementsByClassName('asyncImage');  Array.from(objects).map((item) => {
    // Start loading image
    const img = new Image();
    img.src = item.dataset.src;
    // Once image is loaded replace the src of the HTML element
    img.onload = () => {
      item.classList.remove('asyncImage');
      return item.nodeName === 'IMG' ? 
        item.src = item.dataset.src :        
        item.style.backgroundImage = `url(${item.dataset.src})`;
    };
  });
})();