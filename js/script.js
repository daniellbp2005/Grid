const btnEnviar = document.getElementById("btnEnviar");
const nome = document.getElementById("nome");
const email = document.getElementById("email");
const senha = document.getElementById("pass");
const telefone = document.getElementById("tel");
const p = document.getElementById("paragrafo")


btnEnviar.addEventListener("click", (e)=>{
    e.preventDefault();

    if(
        nome.value === ""||
        email.value === ""||
        senha.value === ""||
        telefone.value === ""
    ){
    p.style.color = "red"
    p.innerText="Preencha os campos do formulário"

    }else{
        nome.value = "";
        email.value = "";
        senha.value = "";
        telefone.value = "";
        p.style.color = "green"
        p.innerText="Mensagem Enviada !"

    }
})