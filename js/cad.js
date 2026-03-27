const nome = document.getElementById("nome")
const email = document.getElementById("email")
const senha = document.getElementById("pass")
const btn = document.getElementById("btn")



btn.addEventListener("click", (e)=>{
    e.preventDefault()
    if(
        nome.value === ""||
        email.value === ""||
        senha.value === ""
    ){
        p.style.color = "red";
        p.innerText = "Preencha os campos do formulário"
    }else{
        window.location.href = "index.php"
    }
})