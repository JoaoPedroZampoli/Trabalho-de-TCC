$(document).ready(function(){
    $('.cep').mask('00000-000');
})

window.onload=function(){
    
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

    const SelectEstados = document.getElementById("Estados");

    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados").then(res => res.json()).then(res => {
        return res.sort((a,b) => a.sigla > b.sigla ? 1 : -1)
    }).then( states => {
        for(const Estado of states){
            SelectEstados.innerHTML += `<option value="${Estado.sigla}">${Estado.nome + " - " + Estado.sigla} </option>`
        }
    })

    /*API IBGE Estados Acima*/
    /*API IBGE Cidades Abaixo*/

    $("#Estados").change(function(){
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