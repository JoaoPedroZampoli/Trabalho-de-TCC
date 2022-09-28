function clickcookie(answer){
    console.log(answer);
    if(answer=="yes"){
        var element = document.getElementById("boxdiv");
        var display = element.style.display;
        element.style.display = "none";
    }
    else{
        var element = document.getElementById("boxdiv");
        var display = element.style.display;
        element.style.display = "none";
    }
}