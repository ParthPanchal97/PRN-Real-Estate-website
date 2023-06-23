let header = document.querySelector('.header');

document.querySelector('#menu-btn').onclick = () =>{
   header.classList.add('active');
}

document.querySelector('#close-btn').onclick = () =>{
   header.classList.remove('active');
}

window.onscroll = () =>{
   header.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumbmer => {
   inputNumbmer.oninput = () =>{
      if(inputNumbmer.value.length > inputNumbmer.maxLength) inputNumbmer.value = inputNumbmer.value.slice(0, inputNumbmer.maxLength);
   }
});