const menu = document.querySelector(".menu"),
  btnAbrir = document.querySelector(".abrir"),
  btnFechar = document.querySelector(".fechar");

function abrirMenu() {
  menu.classList.toggle("ativo");
}

function fecharMenu() {
  menu.classList.toggle("ativo");
}

btnAbrir.addEventListener("click", abrirMenu);
btnFechar.addEventListener("click", fecharMenu);

const btnScroll = document.querySelector(".btn-scroll");

function scrollSuave(event) {
  const section = document.querySelector("#topo");
  section.scrollIntoView({
    behavior: "smooth",
    block: "start", 
  });
}

btnScroll.addEventListener("click", scrollSuave);
