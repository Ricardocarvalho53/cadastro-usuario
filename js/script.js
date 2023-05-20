// Validação incial do formulario 
document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    var nomeInput = document.getElementById('nome');
    var emailInput = document.getElementById('email');
    var senhaInput = document.getElementById('senha');
  
    if (nomeInput.value.trim() === '' || emailInput.value.trim() === '' || senhaInput.value.trim() === '') {
      event.preventDefault(); // Caso tenha algo errado, impede que seja enviado
      alert('Por favor, preencha todos os campos para continuar!');
    }
  });
  