

function openRadioPlayer(radio){
    var myWindow = window.open("", "", "width=500,height=100");
    myWindow.document.write("<audio autoplay controls='controls'> <source src='"+radio+"' type='audio/mpeg'/> </audio>");
}

function genereBox(){
    document.getElementsByClassName('genere-flex-box-name').style.backgroundColor = Math.floor(Math.random() * 16777215).toString(16);
}