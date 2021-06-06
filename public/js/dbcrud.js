function addCountry(){
    let name=document.getElementById("name_field").value;
    let continent=document.getElementById("continent_field").value;
    let language=document.getElementById("language_field").value;
    document.location ="/adminpanel/crud/add/country/insert/"+name+"/"+continent+"/"+language;
}

function addGenere(){
    let name=document.getElementById("name_field").value;
    let description=document.getElementById("description_field").value;
    document.location ="/adminpanel/crud/add/genere/insert/"+name+"/"+description;
    
}

function addStation(){
    
}

function addTopCharts(){

}

function deleteTopCharts(){

}

function editCountry(){
    
}

function editGenere(){
    
}

function editStation(){
    
}

function deleteCountry(id){
    if (confirm("Are you sure you want to delete the country ?")) {
        document.location ="/adminpanel/crud/delete/country/remove/"+id;
      }
}

function deleteGenere(id){
    if (confirm("Are you sure you want to delete the genere ?")) {
        document.location ="/adminpanel/crud/delete/genere/remove/"+id;
    }
}

function deleteStation(id){
    if (confirm("Are you sure you want to delete the station ?")) {
        document.location ="/adminpanel/crud/delete/station/remove/"+id;
    }
}
