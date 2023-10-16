const header = document.querySelector('.header')

window.addEventListener("scroll", () => {
    
    header.classList.toggle('scroll', window.scrollY>7)
});

const menuHambuguer = document.querySelector("#menu-hamburguer")

menuHambuguer.addEventListener("click", () => {

    let nav = document.querySelector(".navMobile")
    menuHambuguer.classList.toggle("hamburguerActive")
    nav.classList.toggle('active')
})

function fecharNav(){
    let nav = document.querySelector(".navMobile")
    let input = document.querySelector("#menu-hamburguer")
    input.checked = false;
    nav.classList.toggle('active')
}

const fecharMobile = ()=>{
    let nav = document.querySelector(".navMobile")
    nav.classList.remove('active')
    removerFundo()
}

//FUNÇÃO SUBMIT


function showConfirmation() {
    alert("Ótimo, recebemos seu E-mail, Entraremos em contato");
}
function scrollToContact() {
    var contatoSection = document.getElementById("sobre-nos");
    var offset = 175; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToSobre() {
    var contatoSection = document.getElementById("sobre-nos");
    var offset = 133; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToDayCare() {
    var contatoSection = document.getElementById("desc-zen");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToPlanoDaySobre(){
    var contatoSection = document.getElementById("desc-zen");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToPlanoHospedagem() {
    var contatoSection = document.getElementById("planoHospedagem");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToPlanoHospedagemSobre() {
    var contatoSection = document.getElementById("desc-zen");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToEmail() {
    var contatoSection = document.getElementById("Ctc");
    var offset = 260; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}

const slider = document.querySelectorAll('.slider');
const numSlides = slider.length;
let currentSlide = 0;

function hideSlider() {
  slider.forEach(item => item.classList.remove('active'));
}

function showSlider() {
  slider[currentSlide].classList.add('active');
}

function nextSlider() {
  hideSlider();
  currentSlide = (currentSlide + 1) % numSlides;
  showSlider();
}

// Função para iniciar o temporizador
function startSlider() {
  showSlider(); // Exibe o primeiro slide ao carregar a página
 
  setInterval(nextSlider, 4000);
}

// Inicia o temporizador
startSlider();


