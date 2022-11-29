$(document).ready(function(){
    $('button#InputCancelar').hide();
    $('button#InputEnviar').hide();
    $('#CPF').mask('000.000.000-00');
    $('#Telefone').mask('(00) 00000-0000');
    $('input.input_form').attr('disabled', true);
    $('select#Genero').attr('disabled', true);
});

function Appear(){
    $('button#InputCancelar').show();
    $('button#InputEnviar').show();
    $('button#InputEditar').hide();
    $('input.input_form').attr('disabled', false);
    //$('input#Email').attr('disabled', true);
    $('select#Genero').attr('disabled', false);
}

function Disappear(){
    $('button#InputCancelar').hide();
    $('button#InputEnviar').hide();
    $('button#InputEditar').show();
    $('input.input_form').attr('disabled', true);
    $('select#Genero').attr('disabled', true);
    SemAlteracao();
}

function SemAlteracao(){
    Swal.fire({
        title: "Operação Cancelada!",
        text: "Nenhum campo foi alterado",
        icon: "error",
        confirmButtonText: "Fechar"
    }).then(function(){ 
        location.reload();
        });
}