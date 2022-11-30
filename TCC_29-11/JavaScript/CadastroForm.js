$(document).ready(function(){
    $('.cpf').mask('000.000.000-00', {reverse: true});
    var maskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
       },
       options = {onKeyPress: function(val, e, field, options) {
        field.mask(maskBehavior.apply({}, arguments), options);
        }
       };
       
       $('.phone').mask(maskBehavior, options);
       $('.cep').mask('00000-000');
       $('.confirmation_number').mask('0');

       /*
       ####################################################
       Máscaras Acima
       SenhaStrength Abaixo
       ####################################################
       */

       var SenhaChecker = document.getElementById("SenhaChecker");
       var SenhaCampo = document.getElementById("Senha");

       /*
       ####################################################
       SenhaStrength Acima
       Tabs Abaixo
       ####################################################
       */

        senha = form.querySelector("#Senha");
        confirmarsenha = form.querySelector("#ConfirmarSenha");

//backBtn.addEventListener("click", () => form.classList.remove('secActive'));



    });

function SenhaStrength(){
    SenhaChecker.style.display = "block";
    SenhaChecker.style.visibility = "visible";
}
function SenhaStrengthDisappear(){
    if($("#Senha").val()!=""){
        SenhaChecker.style.display = "block";
        SenhaChecker.style.visibility = "visible";
    }
    else{
        SenhaChecker.style.display = "none";
        SenhaChecker.style.visibility = "hidden";
    }
}

let SenhaValue;

function SenhaChange(){
    SenhaValue = document.getElementById("Senha").value;
    let alphabet = /[a-zA-Z]/,
        numbers = /[0-9]/,
        specchar = /[!,@,#,$,%,^,&,*,?,_,(,),-,+,=,~]/;

    if(SenhaValue.match(alphabet) || SenhaValue.match(numbers) || SenhaValue.match(specchar)){
        $("#SenhaBar").css({"width":"20%" , "background-color":"#dc3545"});
        $("#SenhaText").display = "inline";
        $("#PasswordQuality").display = "inline";
        $("#PasswordQuality").text("Fraca");
    }
    if(SenhaValue.match(alphabet) && SenhaValue.match(numbers) && SenhaValue.length >= 8){
        $("#SenhaBar").css({"width":"50%" , "background-color":"#ffc107"});
        $("#SenhaText").display = "inline";
        $("#PasswordQuality").display = "inline";
        $("#PasswordQuality").text("Média");
    }
    if(SenhaValue.match(alphabet) && SenhaValue.match(specchar) && SenhaValue.length >= 8){
        $("#SenhaBar").css({"width":"50%" , "background-color":"#ffc107"});
        $("#SenhaText").display = "inline";
        $("#PasswordQuality").display = "inline";
        $("#PasswordQuality").text("Média");
    }
    if(SenhaValue.match(alphabet) && SenhaValue.match(numbers) && SenhaValue.match(specchar) && SenhaValue.length >= 12){
        $("#SenhaBar").css({"width":"100%" , "background-color":"#28a745"});
        $("#SenhaText").display = "inline";
        $("#PasswordQuality").display = "inline";
        $("#PasswordQuality").text("Boa");
    }
    if(SenhaValue.length == 0){
        $("#SenhaBar").css({"width":"0%" , "background-color":"#dc3545"});
        $("#PasswordQuality").text("Fraca");
    }
}

/*const Form_Cadastro = document.getElementById("Form_Cadastro");

if(Form_Cadastro){
    Form_Cadastro.addEventListener("submit", async (e) => {
        e.preventDefault();
        
        const dadosForm = new FormData(Form_Cadastro);

        await fetch("cadastrarUsuario.php", {
            method:"POST";
            body: dadosForm
        })
    })
}*/

function erro(){
    Swal.fire({
        title: "Erro!",
        text: "Ocorreu algum erro ao realizar o seu cadastro",
        icon: "error",
        confirmButtonText: "Fechar"
    })
    alert("Teste");
}
function sucesso(){
    Swal.fire({
        title: "Sucesso!",
        text: "Seu Cadastro foi realizado",
        icon: "success",
        confirmButtonText: "Continuar ->"
    })
}

window.onload=function(){
    
}

/*window.onload=function(){
    
    const preencherCampos = (endereco) =>{
        document.getElementById("Logradouro").value = endereco.logradouro;
        document.getElementById("Bairro").value = endereco.bairro;
        document.getElementById("Estados").value = endereco.uf;
        $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+$("select#Estados.input_form").val()+'/municipios', {id: $("select#Estados.input_form").val()}, function (json){
                var options = '<option disabled selected value="" hidden></option>';
 
                for (var i = 0; i < json.length; i++) {
 
                    options += '<option value="' + json[i].nome + '" >' + json[i].nome + '</option>';
 
                }
 
                $("select[name='Cidades']").html(options);
                document.getElementById("Cidades").value = endereco.localidade;
 
        });
    }

    const cepValido = (cep) => cep.length == 8;

    const pesquisarCep = async() =>{
        let cep = document.getElementById('CEP').value;
        cep = cep.replace('-','');
        const url = `https://viacep.com.br/ws/${cep}/json/`;
        if(cepValido(cep)){
            const dados = await fetch(url);
            const endereco = await dados.json();
            if(endereco.hasOwnProperty('erro')){
                console.log(endereco);
                alert("Cep não encontrado");
            }
            else{
                preencherCampos(endereco);
                console.log(endereco);
                $("#Cidades").val(endereco.localidade);
            }
        }
        else if(cep.length==0){
            alert("Cep não informado");
        }
        else{
            alert("Cep Incorreto");
        }
    }
    document.getElementById("CEP").addEventListener("focusout",pesquisarCep);

    /*Via CEP Acima*/
    /*API IBGE Estados Abaixo*/

    /*const SelectEstados = document.getElementById("Estados");

    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados").then(res => res.json()).then(res => {
        return res.sort((a,b) => a.sigla > b.sigla ? 1 : -1)
    }).then( states => {
        for(const Estado of states){
            SelectEstados.innerHTML += `<option value="${Estado.sigla}">${Estado.nome + " - " + Estado.sigla} </option>`
        }
    })

    /*API IBGE Estados Acima*/
    /*API IBGE Cidades Abaixo*/

    /*$("#Estados").change(function(){
        if($(this).val()){
            $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+$("select#Estados.input_form").val()+'/municipios', {id: $("select#Estados.input_form").val()}, function (json){
                var options = '<option disabled selected value="" hidden></option>';
 
                for (var i = 0; i < json.length; i++) {
 
                    options += '<option value="' + json[i].nome + '" >' + json[i].nome + '</option>';
 
                }
 
                $("select[name='Cidades']").html(options);
 
            });
 
        }
        else{
            $("select[name='Cidades']").html('<option disabled selected value="" hidden></option>');
        }
    })

}

/*function enforceMinMax(el){
    if(el.value != ""){
      if(parseInt(el.value) < parseInt(el.min)){
        el.value = el.min;
      }
      if(parseInt(el.value) > parseInt(el.max)){
        el.value = el.max;
      }
    }
  }*/