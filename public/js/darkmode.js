const darkToggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html');


darkToggle.addEventListener('click',function() {
    if(darkToggle.checked){
        html.classList.add('dark');
    } else{
        html.classList.remove('dark');
    }
})

function setBackgroundImage() {
    const homeElement = document.querySelector('#home');

    // Cek apakah mode gelap aktif atau tidak
    if (document.body.classList.contains('dark')) {
      // Jika mode gelap, ganti dengan gambar khusus mode gelap
      homeElement.style.backgroundImage = "url('../img/bgcoba-dark.png')";
    } else {
      // Jika mode terang, ganti dengan gambar mode terang
      homeElement.style.backgroundImage = "url('../img/bgcoba.png')";
    }
  }