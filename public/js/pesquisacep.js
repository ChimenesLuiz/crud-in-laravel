var cep;
var endereco;
var cidade;
var estado;
var msgerror;
cep = document.getElementById('cep')
endereco = document.getElementById('endereco');
cidade = document.getElementById('cidade');
estado = document.getElementById('estado');
msgerror = document.getElementById('msgerror');

msgerror.innerHTML = '';

function limpar_campos()
{
    endereco.value=("");
    cidade.value=("");
    estado.value=("");
}
function desbloquear_campos()
{
    limpar_campos()
    $("#endereco").prop("disabled", false);
    $("#cidade").prop("disabled", false);
    $("#estado").prop("disabled", false);

}
function bloquear_campos()
{
    $("#endereco").prop("disabled", true);
    $("#cidade").prop("disabled", true);
    $("#estado").prop("disabled", true);
}

function showError(message)
{
    msgerror.innerHTML = message;
    msgerror.style.color = "red";
    msgerror.style.fontWeight = "light";

    setTimeout(function(){
        msgerror.innerHTML = '';
    }, 4000);
}

function pesquisacep()
{
    cep_enviar = cep.value.replace(/\D/g, '');
    if (cep_enviar.trim())
    {
        if((/^[0-9]{8}$/).test(cep_enviar))
        {
            //eu diria que isso aqui e bizzaro
            var script = document.createElement('script');

            script.src = 'https://viacep.com.br/ws/'+ cep_enviar + '/json/?callback=jsonData';

            document.body.appendChild(script);
            //ate aqui
        
        }
        else
        {
            showError('CEP fora do formato: 00000-000');
            limpar_campos()
        }
    }
    else
    {
        showError('Digite um CEP');
        desbloquear_campos()
        
    }
};
function jsonData(conteudo)
{

    if ('erro' in conteudo)
    {
        showError('O CEP informado nao existe');
        desbloquear_campos()
    }
    else
    {
        limpar_campos()
        bloquear_campos()
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('estado').value=(conteudo.uf);
    }
}