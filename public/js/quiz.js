const btn = document.querySelector("#name")
btn.addEventListener("keyup", function(event){

    const senha = document.querySelector("#name")

    if (senha.value !== null) {
        //habilita o botão
        document.getElementById("btnSubmit").disabled = false; 
      } 
      else {
        //desabilita o botão se o conteúdo do input ficar em branco
        document.getElementById("btnSubmit").disabled = true;
      }});

      document.querySelector('#name').oninvalid = function() {  
        // remove mensagens de erro padrão
        this.setCustomValidity("");
        // faz a validação novamente
        if (!this.validity.valid) {
            // se estiver inválido, coloca a mensagem
            this.setCustomValidity("Nome não pode ter caracteres especiais nem ser vazio!");
         }
     };

function SendTo(event){
    event.preventDefault();
    window.location.pathname = "/question"
}

function ForTo(event){
  event.preventDefault();
  window.location.pathname = "/Score"
}