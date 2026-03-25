        const email = document.getElementById("email")
        const sennha = document.getElementById("senha")
        const btn = document.getElementById("btn")
        const p = document.getElementById("texto")
       
        let aux = false

    btn.addEventListener("click", (e)=>{
        e.preventDefault();

        if(
            email.value === ""||
            senha.value === ""
        ){
        p.style.color = "red"
        p.innerText="Preencha os campos do formulário"

        }else{
            window.location.href = "../index.html"
        }
    })

