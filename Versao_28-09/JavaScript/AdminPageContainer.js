$(document).ready(function saudar(){
var myDate = new Date();
var hour = myDate.getHours();

var greet;
var nome = "João";

if (hour < 12){
    greet = 'Bom dia';
}
else if (hour >= 12 && hour <= 17){
    greet = 'Boa tarde';
}
else if (hour >= 17 && hour <= 24){
    greet = 'Boa noite';
}
document.getElementById('lblGreetings').innerHTML =
    '<b>' + greet + ' ' + nome + '!</b>';});  