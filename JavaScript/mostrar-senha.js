//Visualizar senha

const senha = document.querySelector('.inputSenha');
const btn = document.querySelector('#senha');

btn.addEventListener ('click' , ( ) =>
{
    if(senha.type == 'password')
    {
        senha.type = 'text';        
        btn.className = 'fa-solid fa-eye';
    }
    else
    {
        senha.type = 'password';
        btn.className = 'fa-solid fa-eye-slash';
    }
} )